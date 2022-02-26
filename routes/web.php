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

// Route::prefix('home')->group(function () {
//     Route::get('/', 'HomeController@index');
// });

Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/catalog', function () {
    return view('pages.catalog');
});
Route::get('/product', function () {
    return view('pages.product');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/about', function () {
    return view('pages.aboutus');
});