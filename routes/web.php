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

Route::resource('admin','AdminController');
Route::get('store','AdminController@storecategory');
Route::get('view-records','AdminController@index');



// routing for category
// Route::get('/admin', function () {
//    return view('admin.catg');
// });

// Route::get('/admin','AdminController@index');

// Route::get('/admin/create','AdminController@create');

// Route::post('/adminaction','AdminController@storecategory');

//routing for subcategory
// Route::get('/admin', function () {
//     return view('admin.sub-catg');
// });


// Route::get('/viewitem', function () {
//     return view('viewitem.catg-view');
// });
// Route::get('/viewitem', function () {
//     return view('viewitem.sub-catg-view');
// });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

