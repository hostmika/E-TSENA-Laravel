<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;

class PanierController extends Controller
{
   public function getData() {
     
        $produits = Produit::all();
        $categories = Categorie::all();
        return view('pages.panier',compact('produits','categories'));
    }
}
