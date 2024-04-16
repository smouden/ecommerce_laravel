<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function addToCart($productId)
    {
        $product = Product::findOrFail($productId);
        // Créez une nouvelle entrée dans `carts`
        $cart = new Cart();
        $cart->user_id = Auth::id(); // L'ID de l'utilisateur connecté
        $cart->product_id = $product->id;
        $cart->title_product_cart = $product->title_product;
        $cart->price_product_cart = $product->price_product;
        $cart->picture_product_cart = $product->picture;
        $cart->quantity_product_cart = 1; // Quantité par défaut
        $cart->total_price_product = $cart->price_product_cart * $cart->quantity_product_cart; // Total est égal au prix si la quantité est 1
        $cart->save();

        // Redirection ou réponse selon votre besoin
        return redirect()->back()->with('success', 'Product added to cart!');
    }

    public function showCart()
    {
        $user_id = Auth::id(); // Récupère l'ID de l'utilisateur connecté
        $carts = Cart::where('user_id', $user_id)->get(); // Récupère tous les éléments du panier pour cet utilisateur

        // Passez les données à la vue
        return view('cart', ['carts' => $carts]);
    }

    public function updateCart(Request $request)
    {
        foreach ($request->quantities as $cartId => $quantity) {
            $cart = Cart::findOrFail($cartId);
            $cart->quantity_product_cart = $quantity;
            $cart->total_price_product = $cart->price_product_cart * $quantity;
            $cart->save();
        }

        return redirect()->route('cart')->with('success', 'Cart updated successfully!');
    }



}
