<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;

class HomeController extends Controller
{
    public function allProduits() {

        $produits = Produit::all();
        return view('pages.accueil',compact('produits'));
    }
}
