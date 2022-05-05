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

Route::get('/',"App\Http\Controllers\HomeController@getData");
Route::get('/shop',"App\Http\Controllers\ShopController@getData");
Route::get('/panier',"App\Http\Controllers\PanierController@getData");
Route::get('/blog',"App\Http\Controllers\BlogController@getData");
Route::get('/contact',"App\Http\Controllers\ContactController@getData");
Route::get('/produitDetails',"App\Http\Controllers\ProduitDetailsController@getData");
Route::get('/blogDetails',"App\Http\Controllers\BlogDetailsController@getData");