<?php 

namespace App\Http\ViewComposers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\View\View;

class ContenuComposer{

	public function compose(View $view){
		$view->with('categories',Categorie::all());
	}
}