<!DOCTYPE html>
<html>
<head>
    <title>Demo E-mall</title>
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
        .product-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 20px;
        }
        .product {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin: 10px;
            width: 200px;
            text-align: center;
        }
        .product img {
            max-width: 150px;
            max-height: 150px;
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
    <h1>Demo <br> E-mall</h1>
    @php
        $cartItemCount = count(session('cart', []));
    @endphp
    <p>Items in Cart: {{ $cartItemCount }}</p>
    <a class="cart-button" href="/show-cart">Show Cart</a>
</div>

<div class="product-container">
    @foreach($products as $product)
        <div class="product">
            <img src="{{ $product->image }}" alt="{{ $product->title }}">
            <h3>{{ $product->title }}</h3>
            <p>${{ $product->price }}</p>
            <form action="/add-to-cart/{{ $product->id }}" method="post">
                @csrf
                <button class="btn" type="submit">Add to Cart</button>
            </form>
            <form action="/buy-now/{{ $product->id }}" method="post">
                @csrf
                <button class="btn" type="submit">Buy Now</button>
            </form>
        </div>
    @endforeach
</div>

</body>
</html>