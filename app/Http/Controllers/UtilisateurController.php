<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Illuminate\Support\Facades\Session;
=======
>>>>>>> 2057928 (mise en place du prix total dans panier)
>>>>>>> dev

class UtilisateurController extends Controller
{
    public function login(Request $request){

        return view('pages.login');
    }

    public function inscription(Request $request){

        return view('pages.inscription');
    }

    public function inscrire(Request $request) {
     
        $utilisateur = new User();
        $utilisateur->name = $request->nom;
        $utilisateur->email =$request->email;
        $utilisateur->password = Hash::make($request->mdp);
        $utilisateur->save();

        session()->flash('message', 'Votre compte a été crée !');

        return redirect(route('inscription'));
    }

    public function connexion(Request $request){

        $utilisateur = User::where(['email'=>$request->email])->first();
        if(!$utilisateur || !Hash::check($request->password,$utilisateur->password)){
            Session::flash('erreur','votre email ou mot de passe est incorrect');
            //dd(session()->get('erreur'));
            return redirect('/login');
        }
        else{
           $request->session()->put('utilisateur',$utilisateur);
           return redirect('/'); 
        }
    }

    public function deconnexion(){

        Session::forget('utilisateur');
        return redirect('/');
    }
}
