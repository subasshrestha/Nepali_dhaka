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
    return view('pages.index');
});
Route::get('/cart', function () {
    return view('pages.cart');
});
Route::get('/checkout', function () {
    return view('pages.checkout');
});
Route::get('/category', function () {
    return view('pages.category');
});
Route::get('/product', function () {
    return view('pages.product');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/about', function () {
    return view('pages.about');
});
