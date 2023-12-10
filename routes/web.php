<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $data = [
        'title' => 'Home Page',
    ];

    return view('home', $data);
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/reviews', function () {
    return view('reviews');
});