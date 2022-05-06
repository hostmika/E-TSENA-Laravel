<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ShopController extends Controller
{
    public function allProduits() {

        $produits = Produit::all();
        return view('pages.shop',compact('produits'));
    } 
}
