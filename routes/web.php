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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::namespace('Front')->group(function () {
        Route::get('/', 'SiteController@index')->name('home');
        Route::get('/conditions', 'SiteController@conditions')->name('conditions');
        Route::get('/tours', 'SiteController@tours')->name('tours');
        Route::get('/tours/{id}', 'SiteController@tour')->name('tours_id');
        Route::get('/contacts', 'SiteController@contacts')->name('contacts');


});

Auth::routes();

Route::group([
	'namespace' => 'Admin',
	'middleware' => 'auth',
	'prefix' => 'admin'
],function (){
	Route::get('/', 'AdminController@index')->name('admin');
	Route::get('/advantages', 'AdvantageController@index')->name('admin_advantages');
	Route::get('/add_advantages', 'AdvantageController@addAdvantages')->name('admin_add_advantages');
	Route::post('/store_add_advantages', 'AdvantageController@store')->name('admin_store_advantages');
	Route::get('/edit_advantage/{id}', 'AdvantageController@edit')->name('admin_edit_advantages');
	Route::post('/store_edit_advantage/{id}', 'AdvantageController@store_edit')->name('admin_store_edit_advantages');
	Route::post('/delete/{id}', 'AdvantageController@delete_advantages')->name('admin_delete_advantages');
	Route::get('/contacts', 'ContactController@index')->name('admin_contacts');
	Route::get('/add_contacts', 'ContactController@addContacts')->name('admin_add_contacts');
	Route::post('/store_add_contacts', 'ContactController@store')->name('admin_store_contacts');
	Route::get('/edit_contact/{id}', 'ContactController@edit')->name('admin_edit_contact');
	Route::post('/store_edit_contact/{id}', 'ContactController@store_edit_contact')->name('admin_store_edit_contact');
	Route::post('/delete_contact/{id}', 'ContactController@delete_contact')->name('admin_delete_contact');
	Route::get('/tours', 'TourController@index')->name('admin_tours');
	Route::get('/add_tour', 'TourController@addContacts')->name('admin_add_tour');
	Route::post('/store_add_tour', 'TourController@store')->name('admin_store_tour');
	Route::get('/edit_tour/{id}', 'TourController@edit')->name('admin_edit_tour');
	Route::post('/store_edit_tour/{id}', 'TourController@store_edit_tour')->name('admin_store_edit_tour');
	Route::post('/delete_tour/{id}', 'TourController@delete_tour')->name('admin_delete_tour');
	Route::get('/conditions', 'ConditionController@index')->name('admin_conditions');
	Route::get('/add_condition', 'ConditionController@addCondition')->name('admin_add_condition');
	Route::post('/store_add_condition', 'ConditionController@store')->name('admin_store_condition');
	Route::get('/edit_condition/{id}', 'ConditionController@edit')->name('admin_edit_condition');
	Route::post('/store_edit_condition/{id}', 'ConditionController@store_edit_condition')->name('admin_store_edit_condition');
	Route::post('/delete_condition/{id}', 'ConditionController@delete_condition')->name('admin_delete_condition');

});

