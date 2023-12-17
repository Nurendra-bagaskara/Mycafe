<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products_Controller;
use App\Http\Controllers\OrdersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/products', [Products_Controller::class, 'store']);
Route::post('/products/{id}', [Products_Controller::class, 'upload_image']);
Route::get('/products', [Products_Controller::class, 'show']);
Route::get('/products/{id}', [Products_Controller::class, 'detail']);
Route::put('/products/{id}', [Products_Controller::class, 'update']);
Route::delete('/products/{id}', [Products_Controller::class, 'destroy']);

Route::post('/orders', [OrdersController::class, 'store']);
Route::get('/orders', [OrdersController::class, 'show']);
Route::get('/orders/{id}', [OrdersController::class, 'detail']);
Route::put('/orders/{id}', [OrdersController::class, 'update']);
Route::delete('/orders/{id}', [OrdersController::class, 'destroy']);
