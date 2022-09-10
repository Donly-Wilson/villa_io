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

//Home
Route::get('/', function () {
    return view('welcome');
});

// Show all listings
Route::get('/{property_type}/{listing_type}', function () {
    // e.g /apartment/rent or /house/sale
    return view('welcome');
});

// Single listing
Route::get('/listing/{slug}/{id}', function () {
    return view('welcome');
});

// Login
Route::get('/login', function () {
    return view('welcome');
});

// Register
Route::get('/register', function () {
    return view('welcome');
});

// User saved listings
Route::get('/account/saved', function () {
    return view('welcome');
});

// User show listing status
Route::get('/account/show-status', function () {
    return view('welcome');
});