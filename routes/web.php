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

Route::get('/', 'HomeController@index');

// Footer Routes
    Route::get('/contact', 'ContactController@contact')->name('contact'); //formulaire de contact
    Route::get('/formsearch', 'FormSearchController@search')->name('formsearch'); //formulaire de recherche

// Association Route Longue page avec ancres - renvoi sur le footer pour Nous Contacter
    Route::get('/association', 'AssociationController@association')->name('association');

// Vie Associative Route - Longue page avec ancres et renvoi pour chaque section
    Route::get('/communitylife', 'CommunitylifeController@communitylife')->name('communitylife'); //Vie associative
    Route::get('/bulletins'); //Bulletins
    Route::get('/summary');//Listes sommaires
    Route::get('/paperstatements');//Relevés papiers
    Route::get('/genecole');//Génécole
    Route::get('/events');//Evènements

// Recherches
    Route::get('/search', 'SearchController@search')->name('search');//Recherche
    Route::get('/geneabank');//Généabank
    Route::get('/bigenet');//Bigenet
    Route::get('/tips');//Trucs et astuces
    Route::get('/department');//Département
    Route::get('/archives');//Archives
    Route::get('/links');//Liens
    Route::get('/worldresearch');//Recherches dans le monde
    Route::get('/library');//Photothèque


 // Authentication Routes...
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
