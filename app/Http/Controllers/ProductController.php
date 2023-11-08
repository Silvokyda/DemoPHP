<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function addToCart(Product $product)
    {
        session()->push('cart', $product->id);
        return back()->with('success', 'Product added to cart!');
    }

    public function showCart()
    {
        $cartProductIds = session('cart', []);
        $cartProducts = Product::whereIn('id', $cartProductIds)->get();
        return view('cart.show', ['cartProducts' => $cartProducts]);
    }
}
