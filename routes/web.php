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
    return view('layouts.plantilla');
});
Route::get('nintendo', function () {
    return view('nintendo');
});
Route::get('playstation', function () {
    return view('playstation');
});
Route::get('xbox', function () {
    return view('xbox');
});
Route::get('pcgames', function () {
    return view('pcgames');
});
