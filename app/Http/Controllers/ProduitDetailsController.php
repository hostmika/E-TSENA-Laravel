<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitDetailsController extends Controller
{
    public function details(Request $request) {

        $produit = Produit::find($request->id);
        return view('pages.produitDetails',compact('produit'));
    }
}
