<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;

class ShopController extends Controller
{
   public function getData() {

      $produits = Produit::all();
      $categories = Categorie::all();

        return view('pages.shop',compact('produits','categories'));
   }

   public function byCategorie(Request $request) {
      
        $categories = Categorie::all();

        $categorie = Categorie::find($request->id);
        $produits=$categorie->produits;

        return view('pages.shop',compact('produits','categories'));
   }

}
