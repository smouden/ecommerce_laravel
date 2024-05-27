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
        // Récupère le produit depuis la base de données
        $product = Product::findOrFail($productId);

        // Récupère le panier de l'utilisateur pour ce produit
        $existingCartItem = Cart::where('user_id', Auth::id())
            ->where('product_id', $productId)
            ->first();

        if ($existingCartItem) {
            // Si le produit est déjà dans le panier, incrémente la quantité
            $existingCartItem->quantity_product_cart += 1;
            $existingCartItem->total_price_product = $product->price_product * $existingCartItem->quantity_product_cart;
            $existingCartItem->save();
        } else {
            // Si le produit n'est pas dans le panier, crée une nouvelle entrée
            $cart = new Cart();
            $cart->user_id = Auth::id(); // L'ID de l'utilisateur connecté
            $cart->product_id = $productId; // L'ID du produit
            $cart->quantity_product_cart = 1; // La quantité par défaut est 1
            $cart->total_price_product = $product->price_product * $cart->quantity_product_cart;
            $cart->save();
        }

        // Redirige l'utilisateur avec un message de succès
        return redirect()->back()->with('success', 'Product added to cart!');
    }

    public function removeFromCart($cartId)
    {
        // Trouve l'article du panier par son ID et s'assure qu'il appartient à l'utilisateur connecté
        $cartItem = Cart::where('id', $cartId)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        // Supprime l'article du panier
        $cartItem->delete();

        // Redirige l'utilisateur avec un message de succès
        return redirect()->back()->with('success', 'Product removed from cart!');
    }


    public function showCart()
    {
        $user_id = Auth::id(); // Récupère l'ID de l'utilisateur connecté
        $carts = Cart::with('product')->where('user_id', $user_id)->get(); // Précharger les informations du produit
        $shoppingCartTotal = auth()->user()->getShoppingCartTotal(); // Calculer le total du panier

        return view('cart', ['carts' => $carts, 'shoppingCartTotal' => $shoppingCartTotal]);
    }



    public function updateCart(Request $request)
    {
        foreach ($request->quantities as $cartId => $quantity) {
            $cart = Cart::with('product')->findOrFail($cartId); // Charger le produit associé
            $cart->quantity_product_cart = $quantity;
            $product = $cart->product; // Accéder au produit lié
            $cart->total_price_product = $product->price_product * $quantity; // Utiliser le prix du produit lié pour recalculer le total
            $cart->save();
        }

        return redirect()->route('cart')->with('success', 'Cart updated successfully!');
    }




}
