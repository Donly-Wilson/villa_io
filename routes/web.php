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
    return view('pages/home');
});

// Single listing
Route::get('/listing/{slug}/{id}', function () {
    return view('pages/single-listing');
});

// Show all listings
Route::get('/{property_type}/{listing_type}/{city}', function () {
    // e.g /apartment/rent or /house/sale
    return view('pages/listings');
});

// Login
Route::get('/login', function () {
    return view('pages/login');
})->name('login');

// Register
Route::get('/register', function () {
    return view('pages/register');
})->name('register');

// User saved listings
Route::get('/account/saved', function () {
    return view('pages/saved-listings');
});

// User show listing status
Route::get('/account/show-status', function () {
    return view('pages/show-status');
});