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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home/addProduct','HomeController@Product');
Route::post('/home/addProduct/confirmed','HomeController@addProduct');
Route::get('/home/editProduct/{id}','HomeController@edit');
Route::put('/home/updateProduct/{id}','HomeController@updateProduct');
Route::delete('/home/destroy/{id}','HomeController@destroy');
Auth::routes();  
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




