<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f7f7f7; }
        nav { background: #222; padding: 15px; text-align: center; }
        nav a { color: white; text-decoration: none; margin: 0 15px; font-weight: bold; }
        h1 { text-align: center; margin-top: 30px; }
        .products { display: flex; gap: 20px; justify-content: center; padding: 30px; }
        .card { background: white; padding: 20px; width: 250px; border-radius: 10px; box-shadow: 0 2px 8px #ddd; text-align: center; }
        .price { color: #e63946; font-weight: bold; font-size: 20px; }
        .btn { background: #222; color: white; padding: 10px 15px; text-decoration: none; border-radius: 6px; display: inline-block; margin-top: 10px; }
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

<h1>Products</h1>

<div class="products">
    <div class="card">
        <h2>Laptop</h2>
        <p>Electronics</p>
        <p class="price">15000 TL</p>
        <a class="btn" href="/cart">Add to Cart</a>
    </div>

    <div class="card">
        <h2>Headphones</h2>
        <p>Accessories</p>
        <p class="price">1200 TL</p>
        <a class="btn" href="/cart">Add to Cart</a>
    </div>

    <div class="card">
        <h2>Smart Watch</h2>
        <p>Technology</p>
        <p class="price">2500 TL</p>
        <a class="btn" href="/cart">Add to Cart</a>
    </div>
</div>

</body>
</html>