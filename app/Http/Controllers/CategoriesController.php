<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function index()
    {
        return view('category');
    }

    public function showCategory($id)
    {
        $category = Category::with('products')->findOrFail($id); // Utilisez 'with' pour le chargement précoce
        return view('category', compact('category')); // 'category' est la vue qui affiche les produits
    }

    


}
