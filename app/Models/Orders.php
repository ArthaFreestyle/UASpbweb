<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'order_date',
        'total_amount',
        'promo_code_id',
        'status'
    ];

    public function details(){
        return $this->hasMany(OrderDetails::class);
    }

    public function promo(){
        return $this->belongsTo(PromoCode::class);
    }
}
