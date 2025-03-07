<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    // 🟢 Show cart page
    public function index()
    {
        $carts = Session::get('cart', []);
        return view('home.index', compact('carts'));
    }

    // 🟢 Add product to cart
    public function addToCart($id)
    {
        $product = Products::findOrFail($id);
        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => 1
            ];
        }

        Session::put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart!');
    }

    // 🟢 Remove product from cart
    public function removeFromCart($id)
    {
        $cart = Session::get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            Session::put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product removed from cart!');
    }

    // 🟢 Clear cart
    public function clearCart()
    {
        Session::forget('cart');
        return redirect()->back()->with('success', 'Cart cleared!');
    }
}
