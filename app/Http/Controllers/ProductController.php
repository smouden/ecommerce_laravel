<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérez tous les produits avec leurs catégories et marques associées
        // Utilisez 'with' pour la requête optimisée Eager Loading et éviter le N+1 problème
        $products = Product::with('category', 'brand')->get();

        // Retournez la vue 'products.index' avec les produits récupérés
        return view('admin.products.index', compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Récupérez toutes les catégories et marques pour les listes déroulantes
        $categories = Category::all();
        $brands = Brand::all();

        // Retournez la vue avec les catégories et marques
        return view('admin.products.create', compact('categories', 'brands'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'title_product' => 'required|max:255', // max:255 au lieu de max:20 pour permettre des titres plus longs
            'price_product' => 'required|numeric',
            'description_product' => 'required|max:500',
            'stock_quantity' => 'required|integer',
            'size_product' => 'required|max:50',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id',
            'gender' => 'required|integer', // Validation pour le sexe du produit
            'origin' => 'required|string|max:255', // Validation pour l'origine
            'shipping_time' => 'required|string|max:255', // Validation pour le délai de livraison
            'text_product' => 'required|string', // Validation pour le texte supplémentaire du produit
        ]);

        // Création du produit
        $product = new Product($validatedData);

        if ($request->hasFile('picture')) {
            $filename = $request->file('picture')->getClientOriginalName();
            $request->file('picture')->move(public_path('public_admin/img'), $filename);
            $product->picture = 'public_admin/img/' . $filename;
        }

        $product->save(); // Sauvegarde du produit dans la base de données

        // Redirection vers la liste des produits avec un message de succès
        return redirect()->route('products.index')->with('success', 'Produit ajouté avec succès.');
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Trouver le produit par son ID et retourner une erreur 404 si non trouvé
        $product = Product::with('category', 'brand')->findOrFail($id);

        // Passer le produit à la vue
        return view('admin.products.show', compact('product'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::with('category', 'brand')->findOrFail($id);
        $categories = Category::all();
        $brands = Brand::all();

        return view('admin.products.edit', compact('product', 'categories', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Valider les données reçues
        $validatedData = $request->validate([
            'title_product' => 'required|max:255', // ajusté à 255 pour être cohérent avec les standards
            'price_product' => 'required|numeric',
            'description_product' => 'required|max:500',
            'stock_quantity' => 'required|integer',
            'size_product' => 'required|max:50',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id', // 'nullable' si la marque peut être nulle
            'gender' => 'required|integer',
            'origin' => 'required|string|max:255',
            'shipping_time' => 'required|string|max:255',
            'text_product' => 'required|string',
        ]);

        // Trouver le produit par ID
        $product = Product::findOrFail($id);

        // Mettre à jour chaque champ manuellement
        $product->fill($validatedData);

        // Gérer l'upload de l'image si elle est présente
        if ($request->hasFile('picture')) {
            $filename = $request->file('picture')->getClientOriginalName();
            $request->file('picture')->move(public_path('public_admin/img'), $filename);
            $product->picture = 'public_admin/img/' . $filename;
        }

        $product->save(); // Sauvegarder les modifications

        // Rediriger vers la liste des produits avec un message de succès
        return redirect()->route('products.index')->with('success', 'Produit mis à jour avec succès.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Trouver le produit par ID et le supprimer
        $product = Product::findOrFail($id);
        $product->delete();

        // Rediriger vers la liste des produits avec un message de confirmation
        return redirect()->route('products.index')->with('success', 'Produit supprimé avec succès.');
    }
}
