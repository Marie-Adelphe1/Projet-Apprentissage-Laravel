<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 20px auto;
            max-width: 800px;
            padding: 0 20px;
        }

        .cart {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 20px;
        }

        .cart h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #333;
            font-size: 28px;
            text-transform: uppercase;
        }

        .cart-item {
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item .item-name {
            font-weight: bold;
            color: #555;
            font-size: 18px;
        }

        .cart-item .item-quantity {
            color: #888;
            font-size: 16px;
        }

        .cart-total {
            margin-top: 30px;
            text-align: right;
        }

        .cart-total span {
            font-weight: bold;
            color: #333;
            font-size: 20px;
        }

        .cart-action {
            margin-top: 30px;
            text-align: center;
        }

        .cart-action button {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            padding: 15px 30px;
            transition: background-color 0.3s;
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 1px;
            outline: none;
        }

        .cart-action button:hover {
            background-color: #0056b3;
        }

        nav {
            background-color: #007bff;
            overflow: hidden;
        }
        
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            overflow: hidden;
        }
        
        nav li {
            float: left;
        }
        
        nav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        
        nav li a:hover {
            background-color: #ddd;
            color: black;
        }

    </style>
</head>
<body>
    <nav>
    <ul>
    <li><a href="{{ route('welcome') }}">Home</a></li>
    <li><a href="{{ route('search') }}">Articles</a></li>
    
    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
</ul>
    </nav>
    <div class="container">
        <div class="cart">
            <h2>Shopping Cart</h2>
            @php $total=0 @endphp
            @foreach($commands as $command)
            <div class="cart-item">
                <span class="item-name">{{ $command->name }}</span> - <span class="item-quantity">{{ $command->quantity }}</span>
            </div>
            @php $total += $command->price @endphp
            @endforeach
            <div class="cart-total">
                Total: <span>{{ $total }} FCFA</span>
            </div>
            <div class="cart-action">
                <button onclick="window.location.href='paiemen.html'">Proceed to Checkout</button>
            </div>
        </div>
    </div>
</body>
</html>
