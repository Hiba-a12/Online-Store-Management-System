<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f7f7f7; }
        nav { background: #222; padding: 15px; text-align: center; }
        nav a { color: white; text-decoration: none; margin: 0 15px; font-weight: bold; }
        .container { width: 85%; margin: 40px auto; }
        h1 { text-align: center; color: #222; }
        .stats { display: flex; gap: 20px; margin-top: 30px; }
        .card { background: white; padding: 25px; width: 25%; border-radius: 10px; box-shadow: 0 2px 8px #ddd; text-align: center; }
        .card h2 { color: #e63946; font-size: 32px; }
        table { width: 100%; border-collapse: collapse; background: white; margin-top: 35px; box-shadow: 0 2px 8px #ddd; }
        th, td { padding: 15px; border: 1px solid #ddd; text-align: center; }
        th { background: #222; color: white; }
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
    <h1>Admin Dashboard</h1>

    <div class="stats">
        <div class="card">
            <h2>3</h2>
            <p>Products</p>
        </div>
        <div class="card">
            <h2>2</h2>
            <p>Orders</p>
        </div>
        <div class="card">
            <h2>5</h2>
            <p>Customers</p>
        </div>
        <div class="card">
            <h2>17400 TL</h2>
            <p>Total Sales</p>
        </div>
    </div>

    <table>
        <tr>
            <th>Order ID</th>
            <th>Customer</th>
            <th>Total</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>#1001</td>
            <td>Hiba</td>
            <td>15000 TL</td>
            <td>Completed</td>
        </tr>
        <tr>
            <td>#1002</td>
            <td>Student User</td>
            <td>2400 TL</td>
            <td>Pending</td>
        </tr>
    </table>
</div>

</body>
</html>