<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f7f7f7; }
        nav { background: #222; padding: 15px; text-align: center; }
        nav a { color: white; text-decoration: none; margin: 0 15px; font-weight: bold; }
        .container { width: 80%; margin: 40px auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 8px #ddd; }
        h1 { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 25px; }
        th, td { border: 1px solid #ddd; padding: 15px; text-align: center; }
        th { background: #222; color: white; }
        .total { text-align: right; font-size: 22px; font-weight: bold; margin-top: 20px; color: #e63946; }
        .btn { background: #e63946; color: white; padding: 12px 20px; text-decoration: none; border-radius: 6px; display: inline-block; margin-top: 15px; }
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
    <h1>Shopping Cart</h1>

    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        <tr>
            <td>Laptop</td>
            <td>1</td>
            <td>15000 TL</td>
            <td>15000 TL</td>
        </tr>
        <tr>
            <td>Headphones</td>
            <td>2</td>
            <td>1200 TL</td>
            <td>2400 TL</td>
        </tr>
    </table>

    <div class="total">Grand Total: 17400 TL</div>
    <a class="btn" href="/contact">Proceed to Contact</a>
</div>

</body>
</html>