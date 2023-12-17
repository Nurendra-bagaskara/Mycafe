<?php

use App\Http\Controllers\Products_Controller;
use Illuminate\Support\Facades\Route;



Route::get('/', [Products_Controller::class, 'show'])->name('home');


// Route::get('/', function () {
//     return view('home');
// });
Route::get('/Checkout', function () {
    return view('checkout');
});
Route::get('/Menu', function () {
    return view('menu');
});
