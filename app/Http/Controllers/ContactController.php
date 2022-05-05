<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;

class ContactController extends Controller
{
    public function getData() {

        $produits = Produit::all();
        $categories = Categorie::all();
        return view('pages.contact',compact('produits','categories'));
    }
}
