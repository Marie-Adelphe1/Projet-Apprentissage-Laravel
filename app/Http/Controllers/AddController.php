<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; 

class AddController extends Controller
{
    public function addArticle()
    {
        return view('add');
    }

    public function storeArticle(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'nullable|string|max:255',
        ]);

        // Création d'un nouvel article
        
    $article = new Article([
    'name' => $validatedData['name'],
    'description' => $validatedData['description'],
    'price' => $validatedData['price'],
    'category' => $validatedData['category'],
    'status' => 'available',
]);

$article->save(); // Enregistrement de l'article


        // Message de succès
        return redirect()->route('add')->with('success', 'Article added successfully!');
    }
}
