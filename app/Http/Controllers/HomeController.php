<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;

class HomeController extends Controller
{
    public function index() {

        $produits = Produit::all();
        $categories = Categorie::all();
        //dd($produits);
        return view('layouts.contenu',compact('produits','categories'));

    }

    public function afficherCategorie() {

        $categories = Categorie::all();
        dd($categories);
        return view('layouts.contenu',compact('categories'));

    }
}
