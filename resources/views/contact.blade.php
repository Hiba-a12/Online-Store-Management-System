<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f7f7f7; }
        nav { background: #222; padding: 15px; text-align: center; }
        nav a { color: white; text-decoration: none; margin: 0 15px; font-weight: bold; }
        .container { width: 60%; margin: 40px auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 8px #ddd; }
        h1 { text-align: center; color: #222; }
        label { display: block; margin-top: 15px; font-weight: bold; }
        input, textarea { width: 100%; padding: 12px; margin-top: 8px; border: 1px solid #ccc; border-radius: 6px; }
        button { margin-top: 20px; background: #e63946; color: white; padding: 12px 25px; border: none; border-radius: 6px; font-weight: bold; }
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

<div class="container">
    <h1>Contact Us</h1>

    <form>
        <label>Full Name</label>
        <input type="text" placeholder="Enter your name">

        <label>Email</label>
        <input type="email" placeholder="Enter your email">

        <label>Message</label>
        <textarea rows="5" placeholder="Write your message"></textarea>

        <button type="button">Send Message</button>
    </form>
</div>

</body>
</html>