<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\{ ProductController, BlogController};

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


Route::prefix('e-commerce')
    ->name('ec.')
    ->controller(ProductController::class)
    ->group(function(){
        Route::get('/', 'index');
        Route::get('/{id}', 'show');

        Route::post('/', 'store');
        Route::post('/update/{id}', 'update');
        Route::post('/{id}', 'destroy');
    });

Route::prefix('Blog')
    ->name('blog.')
    ->controller(BlogController::class)
    ->group(function(){
        Route::get('/', 'index');
        Route::get('/{id}', 'show');

        Route::post('/', 'store');
        Route::post('/update/{id}', 'update');
        Route::post('/{id}', 'destroy');
    });
    