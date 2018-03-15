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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// EntrepriseController's rootes
Route::get('/Entreprise',"EntrepriseController@index")
			->name('Entreprise')
			->middleware('auth','isEntreprise');
Route::get('/Mes-annonces',"EntrepriseController@show_annonces")
            ->name('Mes-annonces')
            ->middleware('auth','isEntreprise');


