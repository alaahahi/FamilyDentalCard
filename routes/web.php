<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\HomeController;
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
Route::get('/{id}',[HomeController::class,'index']);

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
Route::get('/Pro-Smile-Dental', function () {
    return view('doctor.Pro-Smile-Dental');
});
Route::get('/Brand-Center-Dental', function () {
    return view('doctor.Brand-Center-Dental');
});
Route::get('/Magic-Smile', function () {
    return view('doctor.Magic-Smile');
});
Route::get('/Mohammed-Anwer', function () {
    return view('doctor.Mohammed-Anwer');
});
Route::get('/Roj-Aziz', function () {
    return view('doctor.Roj-Aziz');
});
Route::get('/Evan-Nimrod', function () {
    return view('doctor.Evan-Nimrod');
});
Route::get('/Atta-Dental', function () {
    return view('doctor.Atta-Dental');
});
Route::get('/Hussein-Abdullah', function () {
    return view('doctor.Hussein-Abdullah');
});
Route::get('/Eman-Ibrahim', function () {
    return view('doctor.Eman-Ibrahim');
});
Route::get('/Smile-Design', function () {
    return view('doctor.Smile-Design');
});
Route::get('/Snow-Center', function () {
    return view('doctor.Snow-Center');
});
Route::get('/Salar-Dental', function () {
    return view('doctor.Salar-Dental');
});
Route::get('/Duhok-Center', function () {
    return view('doctor.Duhok-Center');
});
Route::get('/Be-Smile-Duhok', function () {
    return view('doctor.Be-Smile-Duhok');
});
Route::get('/Be-Smile-Zakho', function () {
    return view('doctor.Be-Smile-Zakho');
});
Route::get('/Nada-Dental', function () {
    return view('doctor.Nada-Dental');
});
Route::get('/Exo-Dental', function () {
    return view('doctor.Exo-Dental');
});
Route::get('/Celebrity-Smile', function () {
    return view('doctor.Celebrity-Smile');
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
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
