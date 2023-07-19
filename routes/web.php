<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

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
Route::get('/categories', function () {
    return view('categories');
});
Route::get('/Duhok-Smile', function () {
    return view('doctor.Duhok-Smile');
});
Route::get('/Ziad-Dental', function () {
    return view('doctor.Ziad-Dental');
});
Route::get('/Ahad-Dental', function () {
    return view('doctor.Ahad-Dental');
});
Route::get('/greeting/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'ar', 'fr'])) {
        abort(400);
    }
    setcookie('selectedlang',$locale, time() + (60 * 24 * 30), '/'); // Cookie expires in 30 days

    App::setLocale($locale);
    return redirect()->back(); // Redirect back to the previous page

    // ...
});