<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

// Footer Routes
Route::get('/contact', 'ContactController@viewContact')->name('contact'); //formulaire de contact
Route::get('/mail', 'ContactController@sendMail')->name('mail');
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

// Member
Route::post('/member/update/{user}', 'MemberController@update')->name('member.update');

// Authentification routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/member', 'MemberController@member')->name('member');

// Assemblée générale
Route::get('/reports', 'ReportController@index')->name('report.index');
Route::get('/report/{report}', 'ReportController@show')->name('report.show');

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

	Route::get('/admin/reports', 'Backoffice\ReportController@index')->name('admin.report.index');
	Route::get('/admin/report/create', 'Backoffice\ReportController@create')->name('admin.report.create');
	Route::post('/admin/report/create', 'Backoffice\ReportController@store')->name('admin.report.store');
	Route::get('/admin/report/{report}', 'Backoffice\ReportController@show')->name('admin.report.show');
	Route::get('/admin/report/{report}/edit', 'Backoffice\ReportController@edit')->name('admin.report.edit');
	Route::post('/admin/report/{report}/edit', 'Backoffice\ReportController@update')->name('admin.report.update');
	Route::post('/admin/report/{report}/delete', 'Backoffice\ReportController@destroy')->name('admin.report.destroy');
});
