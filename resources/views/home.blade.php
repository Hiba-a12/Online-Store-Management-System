<!DOCTYPE html>
<html>
<head>
    <title>Online Store Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f6f7fb;
        }
        nav {
            background: #2c3e50;
            padding: 15px;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        .hero {
            padding: 70px;
            text-align: center;
            background: linear-gradient(135deg, #3498db, #8e44ad);
            color: white;
        }
        .hero h1 {
            font-size: 42px;
        }
        .section {
            padding: 40px;
            text-align: center;
        }
        .card {
            background: white;
            padding: 25px;
            margin: 20px auto;
            max-width: 700px;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<nav>
    <a href="/">Home</a>
    <a href="/products">Products</a>
    <a href="/cart">Cart</a>
    <a href="/contact">Contact</a>
    <a href="/admin">Admin</a>
</nav>

<div class="hero">
    <h1>Online Store Management System</h1>
    <p>A simple Laravel project for managing products, orders, cart, and admin dashboard.</p>
</div>

<div class="section">
    <div class="card">
        <h2>Welcome to Our Store</h2>
        <p>This project allows users to browse products, add items to cart, and contact the store management.</p>
    </div>
</div>

</body>
</html>