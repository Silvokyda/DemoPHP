@foreach($products as $product)
    <div class="product">
        <img src="{{ $product->image }}" alt="{{ $product->title }}">
        <h3>{{ $product->title }}</h3>
        <p>${{ $product->price }}</p>
        <form action="/add-to-cart/{{ $product->id }}" method="post">
            @csrf
            <button type="submit">Add to Cart</button>
        </form>
        <form action="/buy-now/{{ $product->id }}" method="post">
            @csrf
            <button type="submit">Buy Now</button>
        </form>
    </div>
@endforeach