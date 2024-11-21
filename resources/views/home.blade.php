<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Template HomePage -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - E-commerce</title>
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px 0;
        }

        header nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        header .logo a {
            font-size: 24px;
            color: white;
            text-decoration: none;
        }

        header .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        header .nav-links li a {
            color: white;
            text-decoration: none;
        }

        /* Search Bar */
        .search-bar {
            display: flex;
            align-items: center;
            background-color: white;
            border-radius: 25px;
            padding: 5px 15px;
            width: 400px;
        }

        .search-bar input {
            border: none;
            outline: none;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 25px;
        }

        .search-bar button {
            background-color: black;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 25px;
            cursor: pointer;
        }

        /* Header Links and Icons */
        header .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        header .header-right a {
            color: white;
            text-decoration: none;
            font-size: 20px;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        header .header-right a:hover {
            color: #ff5722;
        }

        .header-right .cart-icon,
        .header-right .login-icon {
            font-size: 20px;
        }

        /* Hero Section */
        .hero {
            background-image: url('https://via.placeholder.com/1200x700'); /* Replace image */
            background-size: cover;
            background-position: center;
            height: 700px;
            position: relative;
        }

        /* Featured Products */
        .featured-products {
            padding: 40px 0;
            text-align: center;
        }

        .featured-products h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .products {
            display: flex;
            justify-content: space-around;
            gap: 20px;
        }

        .product-card {
            background-color: white;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 250px;
        }

        .product-card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product-card h3 {
            margin: 10px 0;
            font-size: 20px;
        }

        .product-card p {
            color: #ff5722;
            font-size: 18px;
        }

        .product-card a {
            color: #ff5722;
            text-decoration: none;
            font-size: 16px;
            display: block;
            margin-top: 10px;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <nav>
            <div class="logo">
                <a href="#">E-Shop</a>
            </div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>

            <!-- Search Bar -->
            <div class="search-bar">
                <input type="text" placeholder="Search for products...">
                <button><i class="fas fa-search"></i></button>
            </div>

            <!-- Login and Cart Icons -->
            <div class="header-right">
                <!-- Login -->
                <a href="#" class="login-icon"><i class="fas fa-user"></i></a>
                <!-- Cart -->
                <a href="#" class="cart-icon"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero"></section> <!-- image background -->

    <!-- Featured Top Products -->
    <section class="featured-products">
        <h2>Top Products</h2>
        <div class="products">
            <div class="product-card">
                <img src="https://via.placeholder.com/250x250" alt="Product 1">
                <h3>Product 1</h3>
                <p>Rp. 79.999</p>
                <a href="#">View Details</a>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/250x250" alt="Product 2">
                <h3>Product 2</h3>
                <p>Rp. 49.999</p>
                <a href="#">View Details</a>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/250x250" alt="Product 3">
                <h3>Product 3</h3>
                <p>Rp. 19.999</p>
                <a href="#">View Details</a>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/250x250" alt="Product 4">
                <h3>Product 4</h3>
                <p>Rp. 29.999</p>
                <a href="#">View Details</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 E-Shop. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>
