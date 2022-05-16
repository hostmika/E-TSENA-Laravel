<?php 

namespace App\Http\ViewComposers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\View\View;

class ContenuComposer{

	public function compose(View $view){
		$view->with('categories',Categorie::all());
	}
<<<<<<< HEAD
=======

	public function nbPanier(View $view){
		$view->with('paniers',Panier::where(['users_id'=>session()->get('utilisateur')['id']])->count());
	}
>>>>>>> dev
}