<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    public function recherche(Request $request) {
      
        $produits = Produit::where('nom','like','%'.$request->input('query').'%')->get();
        $nbProduits = $produits->count();
        return view('pages.recherche',compact('produits','nbProduits'));
    }
}
