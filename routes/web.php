<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

// Footer Routes
Route::get('/contact', 'ContactController@viewContact')->name('contact'); //formulaire de contact
Route::get('/mail','ContactController@sendMail')->name('mail');
Route::get('/formsearch', 'FormSearchController@search')->name('formsearch'); //formulaire de recherche

// Association Route Longue page avec ancres - renvoi sur le footer pour Nous Contacter
Route::get('/association', 'AssociationController@association')->name('association');

// Vie Associative Route - Longue page avec ancres et renvoi pour chaque section
Route::get('/communitylife', 'CommunitylifeController@communitylife')->name('communitylife'); //Vie associative
Route::get('/bulletins', 'CommunitylifeController@bulletins')->name('bulletins');  //Bulletins
Route::get('/summary', 'CommunitylifeController@summary')->name('summary');//Listes sommaires
Route::get('/paperstatements', 'CommunitylifeController@paperstatements')->name('paperstatements');//Relevés papiers
Route::get('/genecole', 'CommunitylifeController@genecole')->name('genecole');//Génécole
Route::get('/events', 'CommunitylifeController@events')->name('events');//Evènements

// Recherches
Route::get('/search', 'SearchController@search')->name('search');//Recherche
Route::get('/geneabank', 'SearchController@geneabank')->name('geneabank'); //Généabank
Route::get('/bigenet', 'SearchController@bigenet')->name('bigenet'); //Bigenet
Route::get('/tips', 'SearchController@tips')->name('tips');//Trucs et astuces
Route::get('/department', 'SearchController@department')->name('department'); //Département
Route::get('/archives', 'SearchController@archives')->name('archives'); //Archives
Route::get('/links', 'SearchController@links')->name('links');//Liens
Route::get('/worldresearch', 'SearchController@worldresearch')->name('worldresearch');//Recherches dans le mondeRoute::get('/library');//Photothèque


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
Route::get('/member', 'MemberController@member')->name('member');

Route::get('/registerSuccess', 'Auth\RegisterController@registerSuccess')->name('register.success');

/**
 * BACK OFFICE ROUTES
 */
Route::group(['middleware' => ['web', 'auth', 'admin']], function () {
	Route::get('/admin', 'Backoffice\PagesController@home')->name('admin.home');

	Route::get('/admin/members/accepted', 'Backoffice\MembersController@accepted')->name('admin.members.accepted');
	Route::get('/admin/members/waiting', 'Backoffice\MembersController@waiting')->name('admin.members.waiting');
	Route::get('/admin/members/excluded', 'Backoffice\MembersController@excluded')->name('admin.members.excluded');
	Route::get('/admin/members/accept/{user}', 'Backoffice\MembersController@accept')->name('admin.members.accept');
	Route::get('/admin/members/exclude/{user}', 'Backoffice\MembersController@exclude')->name('admin.members.exclude');
});

