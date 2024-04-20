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
    
        // Crée un nouveau panier
        $cart = new Cart();
        $cart->user_id = Auth::id(); // L'ID de l'utilisateur connecté
        $cart->product_id = $productId; // L'ID du produit
        $cart->quantity_product_cart = 1; // La quantité par défaut est 1
    
        // Calcule le total_price_product en utilisant le prix du produit
        $cart->total_price_product = $product->price_product * $cart->quantity_product_cart;
    
        // Sauvegarde l'objet Cart dans la base de données
        $cart->save();
    
        // Redirige l'utilisateur avec un message de succès
        return redirect()->back()->with('success', 'Product added to cart!');
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
