<!DOCTYPE html>
<html>
<head>
    <title>Cart - Demo E-mall</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #f2f2f2;
            padding: 20px 0;
        }
        .cart-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .cart-item {
            margin: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            max-width: 300px;
            text-align: center;
        }
        .cart-item img {
            max-width: 100px;
            max-height: 100px;
            margin-bottom: 10px;
        }
        .btn {
            padding: 8px 16px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Cart <br> Demo E-mall</h1>
</div>

<div class="cart-container">
    @php
        $totalAmount = 0;
    @endphp
    @foreach($cartProducts as $cartProduct)
        <div class="cart-item">
            <img src="{{ $cartProduct->image }}" alt="{{ $cartProduct->title }}">
            <div>
                <h3>{{ $cartProduct->title }}</h3>
                <p>${{ $cartProduct->price }}</p>
                <a href="#" class="remove-item-btn" onclick="removeItem({{ $cartProduct->id }})">Remove Item</a>
            </div>
            @php
                $totalAmount += $cartProduct->price;
            @endphp
        </div>
    @endforeach
</div>

<div class="total-amount">
        <h2>Total Amount: ${{ $totalAmount }}</h2>
</div>
<a href="/checkout" class="checkout-btn">Checkout</a>

</body>
</html>