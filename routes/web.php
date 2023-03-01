<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/a-propos/2itn', function () {
    return view('about/2itn');
});
Route::get('/a-propos/enhance', function () {
    return view('about//enhance');
});
Route::get('/a-propos/erasmus', function () {
    return view('about/erasmus');
});
Route::get('/calendrier/1er-annee', function () {
    return view('calendar/1sYear');
});
Route::get('/calendrier/2eme-annee', function () {
    return view('calendar/2ndYear');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/cours', function () {
    return view('cours');
});
Route::get('/gallerie', function () {
    return view('gallery');
});
Route::get('/laureat', function () {
    return view('laureat');
});
