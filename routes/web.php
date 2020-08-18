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


Route::get('/', 'Companie\MainController@index')->name('page');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/page/ajout', 'HomeController@add')->name('pageAdd');

Route::post('/store/companies', 'HomeController@store')->name('storeCompanies');

Route::get('/accueil', 'HomeController@accueil')->name('accueil');

Route::get('/page/edit{id}', 'HomeController@edit')->name('pageEdit');

Route::post('/update{id}', 'HomeController@update')->name('updateCompanies');

Route::get('/delete{id}', 'HomeController@delete')->name('deleteCompanies');

Route::get('/employe', 'Companie\MainController@empoyer')->name('pageEmploye');

Route::get('/ajout/employe', 'Companie\MainController@ajouteEmpoye')->name('ajoutEmploye');

Route::post('/store', 'Companie\MainController@store')->name('storeEmplye');

Route::get('/edit/employe{id}', 'Companie\MainController@edit')->name('editEmploye');

Route::post('/update/employe{id}', 'Companie\MainController@update')->name('updateEmploye');

Route::get('/delete/employe{id}', 'Companie\MainController@delete')->name('deleteEmploye');
