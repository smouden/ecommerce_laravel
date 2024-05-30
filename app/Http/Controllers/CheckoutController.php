<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();
        $subtotal = $cartItems->sum(function ($cartItem) {
            return $cartItem->quantity_product_cart * $cartItem->product->price_product;
        });

        // frais de livraison
        $shipping = 50; // Par exemple, frais de livraison fixes
        $total = $subtotal + $shipping;

        return view('checkout', compact('cartItems', 'subtotal', 'total', 'shipping'));
    }

    public function store(Request $request)
    {
        // Création de la commande dans la base de données
        $order = new Order();
        $order->user_id = Auth::id();
        $order->firstname = $request->firstname;
        $order->lastname = $request->lastname;
        $order->phone_number = $request->phone_number;
        $order->email_address = $request->email_address;
        $order->country = $request->country;
        $order->postcode = $request->postcode;
        $order->city = $request->city;
        $order->adress_line = $request->adress_line;
        $order->order_date = now(); // ou une autre logique pour définir la date de la commande
        $order->save();

        // Récupération des éléments du panier de l'utilisateur pour les ajouter à la commande
        $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();

        foreach ($cartItems as $item) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $item->product_id;
            $orderItem->title_product_ordered = $item->product->title_product;
            $orderItem->price_product_ordered = $item->product->price_product;
            $orderItem->picture_product_ordered = $item->product->picture;
            $orderItem->quantity_product_comanded = $item->quantity_product_cart;
            $orderItem->total_price_product_commanded = $item->quantity_product_cart * $item->product->price_product;
            $orderItem->save();
        }

        // Vider le panier après la création de la commande
        Cart::where('user_id', Auth::id())->delete();

        // Redirection vers la page de confirmation avec l'ID de la commande
        return redirect()->route('checkout.confirm', ['order' => $order->id]);
    }

    public function confirm($orderId)
    {
        $order = Order::findOrFail($orderId);
        $orderItems = $order->orderItems()->with('product')->get();
    
        // Calculer le total des produits commandés
        $subtotal = $orderItems->sum('total_price_product_commanded');
        
        // Ajouter les frais de livraison
        $shipping = 50; // Par exemple, frais de livraison fixes
        $total = $subtotal + $shipping;
    
        return view('confirmation', [
            'order' => $order,
            'orderItems' => $orderItems,
            'shipping' => $shipping,
            'total' => $total
        ]);
    }
    

}
