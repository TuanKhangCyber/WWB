<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
 Route::get('/', fn()=> redirect('/home'));

Route::get('/home', function() {
    return view('home');
})->name('home');

Route::get('/products', function() {
    return view('product.product');
})->name('products');
Route::get('/tu-vi', function () {
    return view('tuvi');
})->name('tuvi');