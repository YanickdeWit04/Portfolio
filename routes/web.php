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

Route::get('/portfolio', function () {
    return view('projecten.portfolio');
});

Route::get('/overmij', function () {
    return view('nl.overmij');
});

Route::get('/contact', function () {
    return view('nl.contact');
});

Route::get('/cv', function () {
    return view('nl.cv');
});

Route::get('/row',[\App\Http\Controllers\RowController::class,'rowItems']);
