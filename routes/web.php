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
Route::get('/produitDetails',"App\Http\Controllers\ProduitDetailsController@allProduits");
Route::get('/blogDetails',"App\Http\Controllers\BlogDetailsController@allProduits");
Route::get('/categorie/{id}',"App\Http\Controllers\CategorieController@byCategorie")->name('categorie');