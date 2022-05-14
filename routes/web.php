<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',"App\Http\Controllers\HomeController@allProduits")->name('acceuil');
Route::get('/shop',"App\Http\Controllers\ShopController@allProduits")->name('shop');
Route::get('panier',"App\Http\Controllers\PanierController@allProduits")->name('panier');
Route::get('blog',"App\Http\Controllers\BlogController@allProduits")->name('blog');
Route::get('/contact',"App\Http\Controllers\ContactController@allProduits")->name('contact');
Route::get('/produitDetails/{id}',"App\Http\Controllers\ProduitDetailsController@details")->name('produitDetails');
Route::get('/blogDetails',"App\Http\Controllers\BlogDetailsController@allProduits");
Route::get('/categorie/{id}',"App\Http\Controllers\CategorieController@byCategorie")->name('categorie');
Route::get('/recherche',"App\Http\Controllers\ProduitController@recherche")->name('recherche');
Route::post('/panier/ajout/{id}',"App\Http\Controllers\PanierController@ajouterPanier")->name('ajouterPanier');
Route::get('/panier/supprimer/{id}',"App\Http\Controllers\PanierController@supprimerPanier")->name('supprimerPanier');
Route::post('/panier/modifier/{id}',"App\Http\Controllers\PanierController@modifierPanier")->name('modifierPanier');
Route::get('/login',"App\Http\Controllers\UtilisateurController@login")->name('login');
Route::get('/inscription',"App\Http\Controllers\UtilisateurController@inscription")->name('inscription');
Route::post('/inscrire',"App\Http\Controllers\UtilisateurController@inscrire")->name('inscrire');
Route::post('/connexion',"App\Http\Controllers\UtilisateurController@connexion")->name('connexion');
Route::get('/deconnexion',"App\Http\Controllers\UtilisateurController@deconnexion")->name('deconnexion');