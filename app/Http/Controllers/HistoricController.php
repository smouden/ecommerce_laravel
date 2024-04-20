<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HistoricController extends Controller
{
    

    public function index()
    {
        // Récupérer les commandes de l'utilisateur connecté
        $orders = Auth::user()->orders; // Assurez-vous que vous avez défini la relation `orders` dans votre modèle User
    
        // Passer les commandes à la vue
        return view('historic', compact('orders'));
    }
    
}
