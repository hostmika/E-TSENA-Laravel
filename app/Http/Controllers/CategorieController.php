<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;

class CategorieController extends Controller
{
    public function byCategorie(Request $request) {
      
        $byCategorie = Categorie::find($request->id);
        $produits = $byCategorie->produits->paginate(3);
        $nbProduits = $byCategorie->produits->count();

        return view('pages.categorie',compact('produits','byCategorie','nbProduits'));
    }
}
