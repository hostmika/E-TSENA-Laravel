<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;

class BlogController extends Controller
{
    public function allProduits() {

        $produits = Produit::all();
        $categories = Categorie::all();
        return view('pages.blog',compact('produits','categories'));
    }
}
