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

// -installer Bootstrap
// -Renommer la blade welcome par "home"
// -dans un dossier template, créer une blade "index" qui comporte la structure de base et linker son css ainsi que son js
// -créer un dossier pages avec une blade contact et une blade about
// -le contact doit contenir un formulaire de bootstrap
// -le about doit contenir une cards bootstrap
// -pour le formulaire et la cards, faite les dans un dossier partial
// -créer une nav fonctionnel pour chaque page

Route::get('/', function () {
    return view('home');
});

Route::get('/pages/contact', function () {
    return view('pages/contact');
});

Route::get('/pages/about', function () {
    return view('pages/about');
});
