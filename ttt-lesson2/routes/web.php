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
    return view('welcome');
});
Route::get('/greeting', function () {
    return "<h1>Hello world</h1>";
});
route:: redirect("/here","/three");

Route::get('/three', function () {
    return "<h1>redirect to three</h1>";
});

Route::get('/Tung', function () {
    return view('Tung');
});

Route::get('/devmaster/{id}', function($id) {
    return view('<h1>devmaster'.$id .'</h1>');
});