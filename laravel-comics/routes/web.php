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

    $datiMovie = config("comics");
    
    $datiView= [
        "moviesList" => $datiMovie
    ];
    // return view('welcome', [
    //    "moviesList" => $datiMovie
    // ]);
    return view('welcome', $datiView);
});

Route::get('/navbar', function () {
    return "";
})->name("visa");
Route::get('/additiona_sites', function () {
    return "";
})->name("additional-sites");


