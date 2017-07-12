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
    return view('restaurant.index');
});

Auth::routes();
// Alternative route to main page
Route::get('/home', 'HomeController@index')->name('home');
// Main page
Route::get('/', 'RestaurantController@index')->name('mainPage');
// User page
Route::get('/user', 'UserController@index')->name('user.all');
Route::get('/user/{id}', 'UserController@show')->name('user.show');
Route::get('/user/{id}/store', 'UserController@store')->name('user.store');
Route::post('/user/{id}/update', 'UserController@update')->name('user.update');
Route::get('/user/{id}/delete', 'UserController@delete')->name('user.delete');

// Dishes page
Route::get('/dishes', 'DishesController@index')->name('dishes.index'); //Atvaizduoja visus dishes


Route::get('/dishes/create', 'DishesController@create')->name('dishes.create'); //Atvaizduoja formą sukurti naujam produktui
Route::post('/dishes/createdish', 'DishesController@createDish')->name('dishes.createDish'); //Sukuria naują patiekalą
Route::get('/dishes/{id}', 'DishesController@show')->name('dishes.show'); //Atvaizduoja vieną produktą
Route::get('/dishes/{id}/store', 'DishesController@store')->name('dishes.store'); //Pasiima vieno produkto informaciją iš duombazės ir patalpina į formą
Route::post('/dishes/{id}/update', 'DishesController@update')->name('dishes.update'); //Updeitina formą
Route::get('/dishes/{id}/delete', 'DishesController@delete')->name('dishes.delete'); //Ištrina formą

//Kad routai gerai veiktų turi būti ir tvarkingas jų eiliškumas dėl {id}. Jei pirmiausia bus routas su url /dishes/{id}, o po to /dishes/create, tai laravelis nesupras ir galvos apie create kaip apie wildcard {id}
//{id} laravelyje yra vadinama wildcard