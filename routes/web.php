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
  return view('layouts.admin');
});

// category
Route::get('categories','AdminController@add_categories');
Route::get('store','AdminController@storecategory');
Route::get('view-records-categ','AdminController@index');
Route::get('deletecat/{id}','AdminController@destroy')->name('deletecat');
Route::get('editcat/{id}','AdminController@edit');
Route::get('updatecat/{id}','AdminController@update');


// subcategory
Route::get('sub-categories','SubcategController@add_subcategory');
Route::get('storesub','SubcategController@storesubcategory');
Route::get('view-records-subcateg','SubcategController@index');
Route::get('deletesubcat/{id}','SubcategController@destroy')->name('deletesubcat');
Route::get('editsubcatgory/{id}','SubcategController@edit');
Route::get('updatesubcatgory/{id}','SubcategController@update');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


