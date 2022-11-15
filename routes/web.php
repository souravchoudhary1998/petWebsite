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
    return view('pets.index');
});

Route::get('/profile', function () {
    return view('pets.profile');
});

Route::get('/dashboard', function () {
    return view('pets.dashboard');
});

Route::get('/users', function () {
    return view('pets.users');
});

Route::get('/pets', function () {
    return view('pets.pets');
});

Route::get('/settings', function () {
    return view('pets.settings');
});

Route::get('/favourites', function () {
    return view('pets.favourites');
});

Route::get('/add-pet', function () {
    return view('pets.add-pet');
});

Route::get('/login', function () {
    return view('pets.login');
});

Route::get('/register', function () {
    return view('pets.register');
});

Route::get('/about-us', function () {
    return view('pets.about-us');
});
Route::get('/contact', function () {
    return view('pets.contact');
});
Route::get('/how-it-works', function () {
    return view('pets.how-it-works');
});
Route::get('/filter-pets', function () {
    return view('pets.filter-pets');
});
Route::get('/contact-owner', function () {
    return view('pets.contact-owner');
});
Route::get('/pet-profile', function () {
    return view('pets.pet-profile');
});
