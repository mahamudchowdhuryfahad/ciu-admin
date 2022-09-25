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
    return view('index');
})->name(name:'index');

Route::get('/404', function () {
    return view('404');
})->name(name:'404');

Route::get('/sign-up', function () {
    return view('sign-up');
})->name(name:'sign-up');

Route::get('/sign-in', function () {
    return view('sign-in');
})->name(name:'sign-in');

Route::get('/blank-page', function () {
    return view('blank-page');
})->name(name:'Blank-Page');
