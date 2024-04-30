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
        $category = Category::findOrFail($id);
        $products = $category->products; // Retirez la méthode paginate pour récupérer tous les produits

        // Passez les produits à la vue
        return view('category', compact('category', 'products'));
    }

}
