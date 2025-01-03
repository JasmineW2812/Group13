<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* General styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: white;
            color: #001432;
            overflow-y: auto; 
        }

        /* Navbar styles */
        .navbar {
            background-color: #001432; 
            color: white;
            padding: 10px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: sticky;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            width: 100%;
            box-sizing: border-box; 
        }

        /* Top row: Search bar + icons */
        .navbar-top {
            display: flex;
            align-items: center;
            justify-content: center; 
            width: 100%;
        }

        /* Style for the search bar */
        .search-container {
            position: relative;
            width: 900px; 
        }

        .search-bar {
            width: 100%;
            padding: 10px 40px 10px 35px;
            border-radius: 50px; 
            border: 1px solid #ddd;
            font-size: 16px;
            outline: none;
        }

        /* Style for the search icon */
        .search-icon {
            position: absolute;
            left: 15px; 
            top: 50%;
            transform: translateY(-50%); 
            font-size: 18px; 
            color: #888; 
        }

        .icons {
            display: flex;
            align-items: center;
            gap: 15px;
            position: absolute;
            right: 20px; 
        }

        .icon-btn {
            background-color: transparent;
            color: white;
            border: none;
            font-size: 35px;
            cursor: pointer;
        }

        .icon-btn:hover {
            color: #4a90e2;
        }

        /* Categories row */
        .categories-bar {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 10px;
            width: 100%;
        }

        .categories-bar button {
            background-color: transparent; 
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .categories-bar button:hover {
            background-color: #4a90e2; 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); 
            transition: background-color 0.3s ease, box-shadow 0.3s ease; 
        }

        /* Container for the content */
        .container {
            width: 100%; 
            padding: 140px 30px 20px; 
        }

        /* Product Detail Styles */
        .product-detail-container {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 40px;
        }

        /* Product Box (Image Box) */
        .product-detail-box {
            width: 820px; 
            height: 700px; 
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 15px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
            margin-left: 50px;
            margin-top: -30px;

        }

        .product-detail-box img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
            border-radius: 10px;
        }

        
        .product-details {
            max-width: 500px; 
        }

        .product-details h1 {
            font-size: 40px; 
            font-weight: bold;
            margin-bottom: 20px;
        }

        .product-price {
            font-size: 40px;
            color: #001432;
            font-weight: bold;
            margin-bottom: 10px;
            margin-top: 100px;
        }

        .stock-status {
            font-size: 20px; 
            margin-bottom: 20px;
            margin-top: 120px;
            color: #001432; 
        }

        
        .product-description {
            font-size: 18px;
            margin-top: 30px;
            line-height: 1.6;
            margin-left: 50px;
        }

        .cart-btn {
            background-color: #001432;
            color: white;
            padding: 10px 40px 10px 35px;
            border: none;
            border-radius: 50px; 
            margin-top: 150px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 400px;
        }

        .cart-btn:hover {
            background-color: #4a90e2;
        }

        
        body {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <!-- Top Row: Search Bar and Icons -->
        <div class="navbar-top">
            <!-- Search Bar Container -->
            <div class="search-container">
                <input type="text" class="search-bar" placeholder="Search games, consoles & more">
                <div class="search-icon">
                    <i class="fas fa-search"></i>
                </div>
            </div>

            <!-- Profile and Shopping Cart Icons -->
            <div class="icons">
                <button class="icon-btn"><i class="fas fa-user-circle"></i></button>
                <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
            </div>
        </div>

        <!-- Categories Bar -->
        <div class="categories-bar">
            <button>Home</button>
            <button>Games</button>
            <button>Consoles</button>
            <button>Accessories</button>
        </div>
    </div>

    <!-- Product Detail Section -->
    <div class="container">
        <div class="product-detail-container">
            <!-- Product Box (Image Box) -->
            <div class="product-detail-box">
                <!-- Product Image -->
                <img src="your-image-path.jpg" alt="Product Image">
            </div>

            <!-- Product Details Section -->
            <div class="product-details">
                <h1>Product Name</h1>
                <p class="product-price">£99.99</p>
                <p class="stock-status">In Stock</p>
                <button class="cart-btn">Add to Cart</button>
            </div>
        </div>

        <!-- Description Section -->
        <div class="product-description">
            <h2>Description</h2>
            <p>
                This is the description of the product.
            </p>
        </div>
    </div>

</body>
</html>
