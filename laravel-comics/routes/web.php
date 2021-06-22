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
})->name("pagina-welcome");

Route::get('/comic/{index}', function ($index) {

    $datiMovie = config("comics");

    if(!is_numeric($index) || $index < 0 || $index > count($datiMovie) - 1) {
        abort(404, "Comics non esistente");
    }
    $comicScelto =$datiMovie[$index];
    return view('/partials/singlecomics', [
        "comic" => $comicScelto
    ]);
})->name("comic");

Route::get('/navbar', function () {
    return "";
})->name("visa");

Route::get('/additional_sites', function () {
    return "";
})->name("additional-sites");

Route::get('/character', function () {
    return "";
})->name("character");

Route::get('/comics', function () {
    return "";
})->name("comics");


