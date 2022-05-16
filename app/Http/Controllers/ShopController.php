<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ShopController extends Controller
{
    
<<<<<<< HEAD

    public function allProduits() {

=======
    public function allProduits() {

>>>>>>> dev
        $produits = Produit::paginate(8);
        return view('pages.shop',compact('produits'));
    } 
}
