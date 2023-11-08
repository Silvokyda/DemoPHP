@foreach($cartProducts as $cartProduct)
    <div class="cart-item">
        <img src="{{ $cartProduct->image }}" alt="{{ $cartProduct->title }}">
        <h3>{{ $cartProduct->title }}</h3>
        <p>${{ $cartProduct->price }}</p>
    </div>
@endforeach
