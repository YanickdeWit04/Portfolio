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


// Alle engelse routes

    Route::get('/home/en=en', function () {
        return view('en.welcomeen');
    });

    Route::get('/portfolio/en', function () {
        return view('en.portfolioen');
    });

    Route::get('/aboutme', function () {
        return view('en.overmijen');
    });
    Route::get('/contact/en', function () {
        return view('en.contacten');
    });
    Route::get('/cv/en', function () {
        return view('en.cven');
    });

// Alle Nederlandse routes

    Route::get('/portfolio', function () {
        return view('nl.portfolio');
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

    Route::get('/home/nl=nl', function () {
        return view('nl.home');
    });

// Alle Controllers

    Route::get('/form',[\App\Http\Controllers\FormController::class, 'index']);
    Route::post('/form',[\App\Http\Controllers\FormController::class, 'store']);
    Route::get('/btc',[\App\Http\Controllers\BTCController::class, 'showData']);
    Route::get('/taal',[\App\Http\Controllers\TaalController::class, 'taal']);
    Route::get('/',[\App\Http\Controllers\FormController::class, 'index']);
    Route::post('/',[\App\Http\Controllers\FormController::class, 'store']);
    Route::post('/zettaal',[\App\Http\Controllers\TaalController::class, 'zettaal']);
    Route::get('/tafel',[\App\Http\Controllers\TafelController::class, 'index']);
    Route::post('/tafel',[\App\Http\Controllers\TafelController::class, 'store']);
    Route::get('/row',[\App\Http\Controllers\RowController::class,'rowItems']);

    Route::get('/test', function () {
        return view('uitleg.DayController');
    });
    Route::get('/testblade', function () {
        return view('testblade');
    });

    Route::get('/tafel', function () {
        return view('tafel');
    });

// Overig
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/social/test', function () {
        return view('test.codepen');
    });












