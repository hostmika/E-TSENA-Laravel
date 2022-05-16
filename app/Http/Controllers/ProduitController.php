<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
<<<<<<< HEAD
=======
    public function allProduits() {

        $produits = Produit::paginate(8);
        return view('pages.shop',compact('produits'));
    } 

>>>>>>> dev
    public function recherche(Request $request) {
      
        $produits = Produit::where('nom','like','%'.$request->input('query').'%')->get();
        $nbProduits = $produits->count();
        return view('pages.recherche',compact('produits','nbProduits'));
    }
}
