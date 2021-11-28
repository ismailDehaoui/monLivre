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

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/acceuil', function () {
    return view('layouts.master');
});
    
Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});
//categories    


Route::get('catégories', 'CategorieController@index');
Route::get('catégories/ajouter', 'CategorieController@create');
Route::post('catégories', 'CategorieController@store');
Route::get('catégories/{id}/modifier', 'CategorieController@edit');
Route::put('catégories/{id}', 'CategorieController@update');
Route::delete('catégories/{id}', 'CategorieController@destroy');

//Abonnées
Route::get('/abonnées','AbonneeController@listAbonnees');
Route::get('abonnée/créer','AbonneeController@create');
Route::get('abonnée/{id}/profile', 'AbonneeController@profile');
Route::post('abonnée/ajouterAbonnée','AbonneeController@store');
Route::put('modifier/{id}','AbonneeController@update');    
Route::get('mod/{id}/edit','AbonneeController@edit');


//auteurs
Route::get('/auteurs','AuteurController@listAuteurs');


Route::get('auteurs/créer','AuteurController@create');

//Route::get('auteurs/{id}/profile', 'AuteurController@profile');

Route::post('auteurs/ajouterAuteur','AuteurController@store');

//livres

Route::get('livres', 'LivreController@index');
Route::get('livres/ajouter', 'LivreController@create');
Route::post('livres', 'LivreController@store');
Route::get('livres/{id}/modifier', 'LivreController@edit');
Route::put('livres/{id}', 'LivreController@update');
Route::delete('livres/{id}', 'LivreController@destroy');

//Emprunts
Route::get('/emprunts','EmpruntController@listEmprunts');