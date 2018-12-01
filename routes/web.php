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

// Route::get('/', function () {
//     return view('landing.landing');
// });

Auth::routes();

Route::get('/', 'LandingController@index')->name('landing.index');
Route::get('show/{id}', 'LandingController@showSingle')->name('landing.show');


Route::get('/home', 'HomeController@index')->name('home');


//profile
Route::get('profile/{id}', 'ProfileController@index')->name('profile');
Route::get('profile/edit/{id}', 'ProfileController@edit')->name('profile.edit');
Route::post('profile/update', 'ProfileController@update')->name('profile.update');




//admin
Route::group(['as'=>'admin.', 'middleware'=>['auth','admin']], function() {
	Route::get('dashboard','AdminController@index')->name('dashboard');
	Route::resource('product','ProductController');
	Route::resource('category','CategoryController');

});

Route::post('product_update','LandingController@updateProduct');
Route::post('category_update','LandingController@updateCategory');

Route::get('order/{id}','OrderController@index')->name('order.index');
Route::post('order/store','OrderController@store')->name('order.store');
Route::get('success','OrderController@success')->name('order.success');

