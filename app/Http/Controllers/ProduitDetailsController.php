<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;

class ProduitDetailsController extends Controller
{
    public function allProduits() {

        $produits = Produit::all();
        $categories = Categorie::all();
        return view('pages.produitDetails',compact('produits','categories'));
    }
}
