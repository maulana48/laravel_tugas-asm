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

Route::get('/users', function () {
    return view('index', [
        'title' => 'Homepage',
        'icon' => 'b.png'
    ]);
})->name('user.index');
Route::get('/show/{id}', function ($id) {
    return view('show', [
        'title' => 'Userpage',
        'icon' => 'a.png',
        'id' => $id -1
    ]);
})->name('user.show');
