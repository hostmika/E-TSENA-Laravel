<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;

class CategorieController extends Controller
{
    public function byCategorie(Request $request) {
      
        $categorie = Categorie::find($request->id);
        $produits = $categorie->produits;
        return view('pages.categorie',compact('produits'));
    }
}
