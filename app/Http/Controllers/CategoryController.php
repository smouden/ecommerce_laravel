<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'name_category' => 'required|max:255', // Assurez-vous que le 'name_category' est requis et qu'il ne dépasse pas 255 caractères
        ]);

        // Création de la nouvelle catégorie
        $category = new Category;
        $category->name_category = $validatedData['name_category']; // Assurez-vous que la colonne dans la base de données s'appelle 'name'
        $category->save(); // Sauvegarde de la catégorie dans la base de données

        // Redirection vers la liste des catégories avec un message de succès
        return redirect()->route('categories.index')->with('success', 'Category added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Trouver la catégorie par son ID et retourner une erreur 404 si non trouvée
        $category = Category::findOrFail($id);

        // Passer la catégorie à la vue
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Trouver la catégorie par son ID et retourner une erreur 404 si non trouvée
        $category = Category::findOrFail($id);

        // Passer la catégorie à la vue d'édition
        return view('admin.categories.edit', compact('category'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validation des données
        $validatedData = $request->validate([
            'name_category' => 'required|max:255', // Vous pouvez ajouter d'autres règles de validation si nécessaire
        ]);

        // Recherche de la catégorie par ID et mise à jour
        $category = Category::findOrFail($id);
        $category->name_category = $validatedData['name_category']; // Assurez-vous que le nom de la colonne dans la base de données correspond
        $category->save(); // Sauvegarde des modifications

        // Redirection vers la page d'index avec un message de session
        return redirect()->route('categories.index')->with('success', 'Catégorie mise à jour avec succès.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Trouver la catégorie par son ID
        $category = Category::findOrFail($id);
        
        // Supprimer la catégorie
        $category->delete();
        
        // Redirection vers la liste des catégories avec un message de succès
        return redirect()->route('categories.index')->with('success', 'Catégorie supprimée avec succès.');
    }
    
}
