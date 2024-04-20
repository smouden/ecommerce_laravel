<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brands.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'name_brand' => 'required|max:255', // Assurez-vous que le 'name_brand' est requis et qu'il ne dépasse pas 255 caractères
        ]);

        // Création de la nouvelle brand
        $brand = new Brand;
        $brand->name_brand = $validatedData['name_brand']; // Assurez-vous que la colonne dans la base de données s'appelle 'name'
        $brand->save(); // Sauvegarde de la brand dans la base de données

        // Redirection vers la liste des brands avec un message de succès
        return redirect()->route('brands.index')->with('success', 'brand added successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Trouver le couleur par son ID et retourner une erreur 404 si non trouvée
        $brand = Brand::findOrFail($id);

        // Passer la brand à la vue
        return view('admin.brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Trouver la brand par son ID et retourner une erreur 404 si non trouvée
        $brand = Brand::findOrFail($id);

        // Passer la brand à la vue d'édition
        return view('admin.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validation des données
        $validatedData = $request->validate([
            'name_brand' => 'required|max:255', // Vous pouvez ajouter d'autres règles de validation si nécessaire
        ]);
        // Recherche de la brand par ID et mise à jour
        $brand = Brand::findOrFail($id);
        $brand->name_brand = $validatedData['name_brand']; // Assurez-vous que le nom de la colonne dans la base de données correspond
        $brand->save(); // Sauvegarde des modifications

        // Redirection vers la page d'index avec un message de session
        return redirect()->route('brands.index')->with('success', 'brand mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Trouver la brand par son ID
        $brand = Brand::findOrFail($id);

        // Supprimer la brand
        $brand->delete();

        // Redirection vers la liste des brands avec un message de succès
        return redirect()->route('brands.index')->with('success', 'brand supprimée avec succès.');
    }
}
