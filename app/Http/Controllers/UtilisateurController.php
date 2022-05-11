<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class UtilisateurController extends Controller
{
    function login(Request $request){

        return view('pages.login');
    }

    function connexion(Request $request){

        $utilisateur = User::where(['email'=>$request->email])->first();
        if(!$utilisateur || !Hash::check($request->password,$utilisateur->password)){
            return "incorrect";
        }
        else{
           $request->session()->put('utilisateur',$utilisateur);
           return redirect('/'); 
        }
    }

    function deconnexion(){

        Session::forget('utilisateur');
        return redirect('/');
    }
}
