<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Trouver le couleur par son ID et retourner une erreur 404 si non trouvée
        $order = Order::findOrFail($id);
        // Passer la order à la vue
        return view('admin.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Trouver la order par son ID et retourner une erreur 404 si non trouvée
        $order = Order::findOrFail($id);

        // Passer la order à la vue d'édition
        return view('admin.orders.edit', compact('order'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Valider la demande
        $request->validate([
            'status' => 'required|integer', // Assurez-vous que le statut est un entier et qu'il est présent dans la requête
        ]);
    
        // Trouver la commande par son ID et retourner une erreur 404 si non trouvée
        $order = Order::findOrFail($id);
    
        // Mettre à jour le statut de la commande
        $order->status = $request->status;
        $order->save(); // Enregistrez les modifications dans la base de données
    
        // Rediriger vers la liste des commandes avec un message de confirmation
        return redirect()->route('orders.index')->with('success', 'Order status updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Trouver la brand par son ID
        $order = Order::findOrFail($id);

        // Supprimer la brand
        $order->delete();

        // Redirection vers la liste des brands avec un message de succès
        return redirect()->route('orders.index')->with('success', 'brand supprimée avec succès.');
    }
}
