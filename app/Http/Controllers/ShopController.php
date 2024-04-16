<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function index()
    {
        return view('shop');
    }

    public function showCategory($id)
    {
        $category = Category::with('products')->findOrFail($id); // Utilisez 'with' pour le chargement précoce
        return view('shop', compact('category')); // 'shop' est la vue qui affiche les produits
    }

    
    
}
