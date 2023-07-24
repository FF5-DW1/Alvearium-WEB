<?php

use App\Http\Middleware\LocaleCookieMiddleware;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/locale/{locale}', function ($locale) {

    $allowed_locales = ['en', 'es'];

    if (!in_array($locale, $allowed_locales)) {
        abort(400, "Invalid locale"); // Retorna error 400 si el locale no es permitido
    }
    return redirect()->back()->withCookie('locale', $locale);
});

Route::middleware(LocaleCookieMiddleware::class)->group(function () {

    Route::view('/', 'index')->name('home');
    Route::view('/quienes-somos', 'quienes-somos')->name('quienes-somos');
    Route::view('/news', 'news')->name('news');
});
