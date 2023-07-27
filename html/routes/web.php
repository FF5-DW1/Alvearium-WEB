<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoadmapNodeController;
use App\Http\Controllers\UserController;
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

// RUTAS PUBLICAS

<<<<<<< HEAD
Route::get('/locale/{locale}', function ($locale) {

    $allowed_locales = ['en', 'es'];

    if (!in_array($locale, $allowed_locales)) {
=======
Route::get('/locale/{locale}' , function ($locale) {
    
    $allowed_locales = ['en','es'];
    
    if(! in_array($locale, $allowed_locales)) {
>>>>>>> 7e2aa3ddb347435d60ee3412a63ca63f944d1053
        abort(400, "Invalid locale"); // Retorna error 400 si el locale no es permitido
    }
    return redirect()->back()->withCookie('locale', $locale);
});

Route::middleware(LocaleCookieMiddleware::class)->group(function () {
<<<<<<< HEAD
    
    Route::view('/' , 'index')->name('home');
    Route::view('/quienes-somos' , 'quienes-somos')->name('quienes-somos');
    
=======

    Route::view('/', 'index')->name('home');
    Route::view('/quienes-somos', 'quienes-somos')->name('quienes-somos');
    Route::view('/news', 'news')->name('news');
    Route::post('contact' ,[ContactController::class, 'store'])->name('contactForm.store');
>>>>>>> 7e2aa3ddb347435d60ee3412a63ca63f944d1053
});

// ----------------------------------------------------------

// RUTAS PRIVADAS

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::controller(UserController::class)->prefix('admin')->group(function() {
    //     Route::get('/list_user', 'index')->name('profile.edit');
    //     Route::put('profile', 'updateProfile');
    //     Route::delete('profile', 'deleteProfile');
    // });
    
    Route::controller(RoadmapNodeController::class)->prefix('admin')->middleware(['auth', 'verified'])->group(function() {
        Route::get('/roadmaps', 'index')->name('roadmaps.index');
        Route::post('/roadmaps', 'store')->name('roadmaps.store'); 
        Route::post('/roadmaps/edit/{id}', 'edit')->name('roadmaps.edit'); 
        Route::get('/roadmaps/delete/{id}', 'destroy')->name('roadmaps.destroy');
    });

});



require __DIR__.'/auth.php';
<<<<<<< HEAD

    Route::view('/', 'index')->name('home');
    Route::view('/quienes-somos', 'quienes-somos')->name('quienes-somos');
    Route::view('/news', 'news')->name('news');

=======
>>>>>>> 7e2aa3ddb347435d60ee3412a63ca63f944d1053
