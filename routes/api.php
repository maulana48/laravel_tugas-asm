<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/e-commerce', [ProductController::class, 'index']);
Route::get('/e-commerce/{id}', [ProductController::class, 'show']);

Route::post('/e-commerce', [ProductController::class, 'store']);
Route::post('/e-commerce/update/{id}', [ProductController::class, 'update']);
Route::post('/e-commerce/{id}', [ProductController::class, 'destroy']);