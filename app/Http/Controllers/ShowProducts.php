<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShowProducts extends Controller
{
    public function show($id)
    {
        $product = Product::with('category', 'brand')->findOrFail($id);    // Assurez-vous que 'category' est le nom correct de la relation dans votre modèle Product.

        $category = $product->category; // Obtenez la catégorie à partir de la relation.
        $brand = $product->brand; // Assurez-vous que 'brand' est le nom correct de la relation dans votre modèle Product.


        return view('single_product', compact('product', 'category', 'brand'));
    }
}
