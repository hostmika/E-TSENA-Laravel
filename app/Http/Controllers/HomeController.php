<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;

class HomeController extends Controller
{
    public function getData() {

        $produits = Produit::all();
        $categories = Categorie::all();
        
        return view('pages.acceuil',compact('produits','categories'));
    }
}
