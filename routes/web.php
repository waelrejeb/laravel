<?php

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

Route::get('/','PagesController@index')->name('pageAcceuil');
Route::get('/eleve','PagesController@ajouterLivre')->name('ajouter_Livre');
Route::post('/eleve','PagesController@postajouterEleve')->name('post_ajouter_Eleve');
Route::get('/eleve/{eleve}','PagesController@supprimerEleve')->name('get_supprimer_Eivre');
