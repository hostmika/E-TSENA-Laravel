<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ShopController extends Controller
{
    

    public function allProduits() {

        $produits = Produit::paginate(8);
        return view('pages.shop',compact('produits'));
    } 
}
