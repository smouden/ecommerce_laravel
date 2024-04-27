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
        // Récupère la catégorie avec pagination des produits
        $category = Category::findOrFail($id);
        $products = $category->products()->paginate(3); // 9 produits par page
    
        // Passez les produits paginés à la vue
        return view('category', compact('category', 'products'));
    }



}
