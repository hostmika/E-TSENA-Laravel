<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Panier;
use Cart;

class PanierController extends Controller
{

<<<<<<< HEAD
=======
    /*public function allProduits(Request $request) {

        $paniers = Panier::where(['users_id'=>$request->session()->get('utilisateur')['id']])->get();
        
        return view('pages.panier',compact('paniers'));
    }*/

>>>>>>> dev
    public function allProduits() {

        if(session()->has('utilisateur')){
            $idUtilisateur = session()->get('utilisateur')['id'];
            $paniers = Cart::session($idUtilisateur )->getContent();
<<<<<<< HEAD

            $condition = new \Darryldecode\Cart\CartCondition(array(
                'name' => 'VAT 12.5%',
                'type' => 'tax',
                'target' => 'total', 
                'value' => '12.5%',
                'attributes' => array( 
                    'description' => 'Value added tax',
                    'more_data' => 'more data here'
                )
            ));

            Cart::condition($condition);
            //Cart::clearCartConditions();
            //dd($condition);
=======
>>>>>>> dev
            
            return view('pages.panier',compact('paniers'));
        }
        else{
<<<<<<< HEAD
            $message = "Vous devez se connecter !";
            return view('pages.panier',compact('message'));  
        }
        
=======
<<<<<<< HEAD
            $message = "Votre panier est vide";
=======
            $message = "Vous devez se connecter !";
>>>>>>> 2057928 (mise en place du prix total dans panier)
            return view('pages.panier',compact('message'));  
        }
        
    }

    /*public function ajouterPanier(Request $request) {
     
        $produit = Produit::find($request->id);
        $panier = new Panier();
        $panier->produits_id = $produit->id;
        $panier->users_id = $request->session()->get('utilisateur')['id'];
        $panier->nom = $produit->nom;
        $panier->prix =$produit->prix;
        $panier->quantite = $request->quantite;
        $panier->image = $produit->image;
        $panier->save();

        return redirect(route('panier'));
    }*/

    public function ajouterPanier(Request $request) {
     
        $idUtilisateur = $request->session()->get('utilisateur')['id'];
        $produit = Produit::find($request->id);

        Cart::session($idUtilisateur)->add([
            'id' => $produit->id,
            'name' => $produit->nom,
            'price' => $produit->prix,
            'quantity' => $request->quantite,
            'attributes' => array(
                'image' => $produit->image,
            )
        ]);

        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect(route('panier'));
    }

    public function ajouter(Request $request) {
     
        $idUtilisateur = $request->session()->get('utilisateur')['id'];
        $produit = Produit::find($request->id);

        Cart::session($idUtilisateur)->add([
            'id' => $produit->id,
            'name' => $produit->nom,
            'price' => $produit->prix,
            'quantity' => 1,
            'attributes' => array(
                'image' => $produit->image,
            )
        ]);

        return redirect(route('panier'));
    }

    /*public function modifierPanier(Request $request) {

        $panier = Panier::find($request->id);
        $panier->quantite = $request->quantite;
        $panier->save();
        return redirect(route('panier'));
    }*/

    public function modifierPanier(Request $request) {

        $idUtilisateur = $request->session()->get('utilisateur')['id'];
        
        Cart::session($idUtilisateur)->update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantite
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect(route('panier'));
    }

    /*public function supprimerPanier(Request $request) {

        Panier::destroy($request->id);
        return redirect(route('panier'));
    }*/

    public function supprimerPanier(Request $request) {

        $idUtilisateur = $request->session()->get('utilisateur')['id'];
        Cart::session($idUtilisateur)->remove($request->id);

        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect(route('panier'));
    }

    public function supprimerTout()
    {
        $idUtilisateur = session()->get('utilisateur')['id'];
        Cart::session($idUtilisateur)->clear();

        session()->flash('supprimerTout', 'Tous les produits sont supprimés !');

        return redirect(route('panier'));
>>>>>>> dev
    }


    public function ajouterPanier(Request $request) {
     
        if(session()->has('utilisateur')){

            $idUtilisateur = session()->get('utilisateur')['id'];
            $produit = Produit::find($request->id);

            Cart::session($idUtilisateur)->add([
                'id' => $produit->id,
                'name' => $produit->nom,
                'price' => $produit->prix,
                'quantity' => $request->quantite,
                'attributes' => array(
                    'image' => $produit->image,
                )
            ]);

            session()->flash('success', 'Product is Added to Cart Successfully !');

            return redirect(route('panier'));
        }
        else{
           return redirect(route('panier')); 
        }

    }

<<<<<<< HEAD
    /*public function modifierPanier(Request $request) {

        $panier = Panier::find($request->id);
        $panier->quantite = $request->quantite;
        $panier->save();
        return redirect(route('panier'));
    }*/
=======
    public function ajouter(Request $request) {
     
        if(session()->has('utilisateur')){
            $idUtilisateur = session()->get('utilisateur')['id'];
            $produit = Produit::find($request->id);

            Cart::session($idUtilisateur)->add([
                'id' => $produit->id,
                'name' => $produit->nom,
                'price' => $produit->prix,
                'quantity' => 1,
                'attributes' => array(
                    'image' => $produit->image,
                )
            ]);

            return redirect(route('panier'));
        }
        else{
            return redirect(route('panier'));
        }
        
    }
>>>>>>> c5f7b8d (finalisation du site web)

    public function modifierPanier(Request $request) {

        $idUtilisateur = $request->session()->get('utilisateur')['id'];
        
        Cart::session($idUtilisateur)->update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantite
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect(route('panier'));
    }


    public function supprimerPanier(Request $request) {

        $idUtilisateur = $request->session()->get('utilisateur')['id'];
        Cart::session($idUtilisateur)->remove($request->id);

        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect(route('panier'));
    }

    public function supprimerAllPanier()
    {
        $idUtilisateur = $request->session()->get('utilisateur')['id'];
        Cart::session($idUtilisateur)->clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect(route('panier'));
    }

   
}
