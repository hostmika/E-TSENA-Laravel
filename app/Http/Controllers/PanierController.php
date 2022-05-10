<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Panier;

class PanierController extends Controller
{
   public function ajouterPanier(Request $request) {
     
        $produit = Produit::find($request->id);
        $panier = new Panier();
        $panier->produits_id = $produit->id;
        $panier->nom = $produit->nom;
        $panier->prix =$produit->prix;
        $panier->quantite = $request->quantite;
        $panier->image = $produit->image;
        $panier->save();

        return redirect(route('panier'));
    }

    public function allProduits() {

        $paniers = Panier::all();
        return view('pages.panier',compact('paniers'));
    }


    public function supprimerPanier(Request $request) {

        Panier::destroy($request->id);
        return redirect(route('panier'));
    }
}
