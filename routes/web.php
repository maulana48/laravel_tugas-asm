<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EController;

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

Route::prefix('user')->group(function(){
    Route::get('/', function () {
        return view('user.index', [
            'title' => 'Homepage',
            'icon' => 'b.png'
        ]);
    })->name('user.index');

    Route::get('/show/{id}', function ($id) {
        return view('user.show', [
            'title' => 'Userpage',
            'icon' => 'a.png',
            'id' => $id -1
        ]);
    })->name('user.show');
});

Route::prefix('e-commerce')
    ->name('ec.')
    ->controller(Econtroller::class)
    ->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
});