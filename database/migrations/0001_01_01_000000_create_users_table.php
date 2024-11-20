<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        Schema::create('categories',function(Blueprint $table){
            $table->id('category_id')->primary();
            $table->string('category_name');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('products',function (Blueprint $table){
            $table->id('product_id')->primary();
            $table->string('product_name',200)->nullable();
            $table->string('product_image');
            $table->text('description');
            $table->integer('price');
            $table->integer('stock');
            $table->unsignedBigInteger('category_id'); 
            $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');
            $table->timestamps(); 
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id'); // ID unik untuk setiap order
            $table->unsignedBigInteger('user_id'); // ID pengguna yang membuat order
            $table->dateTime('order_date'); // Tanggal pemesanan
            $table->integer('total_amount'); // Total jumlah uang yang dibayar
            $table->string('status')->default('pending'); // Status pesanan (e.g., pending, completed)
            $table->timestamps(); // Kolom created_at dan updated_at

            // Relasi ke tabel users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Tabel order_details
        Schema::create('order_details', function (Blueprint $table) {
            $table->id('order_detail_id'); // ID unik untuk setiap detail
            $table->unsignedBigInteger('order_id'); // ID order yang terkait
            $table->unsignedBigInteger('product_id'); // ID produk yang dipesan
            $table->integer('quantity'); // Jumlah produk yang dipesan
            $table->integer('price'); // Harga per unit produk
            $table->integer('subtotal'); // Total harga untuk produk ini (quantity * price)
            $table->timestamps(); // Kolom created_at dan updated_at

            // Relasi ke tabel orders
            $table->foreign('order_id')->references('order_id')->on('orders')->onDelete('cascade');
            // Relasi ke tabel products
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
        });

        Schema::create('product_reviews', function (Blueprint $table) {
            $table->id('review_id'); // ID unik untuk setiap review
            $table->unsignedBigInteger('user_id'); // ID pengguna yang memberikan review
            $table->unsignedBigInteger('product_id'); // ID produk yang direview
            $table->tinyInteger('rating')->unsigned(); // Rating produk (1-5)
            $table->text('review')->nullable(); // Isi review (opsional)
            $table->timestamps(); // Kolom created_at dan updated_at

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // Relasi ke tabel products
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
