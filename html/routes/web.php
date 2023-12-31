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

Route::get('/locale/{locale}' , function ($locale) {
    
    $allowed_locales = ['en','es'];
    
    if(! in_array($locale, $allowed_locales)) {
        abort(400, "Invalid locale"); // Retorna error 400 si el locale no es permitido
    }
    return redirect()->back()->withCookie('locale', $locale);
});

Route::middleware(LocaleCookieMiddleware::class)->group(function () {

    Route::view('/', 'index')->name('home');
    Route::view('/quienes-somos', 'quienes-somos')->name('quienes-somos');
    Route::view('/news', 'news')->name('news');
    Route::post('contact' ,[ContactController::class, 'store'])->name('contactForm.store');
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

// ---------spatie---------------------------------------------------------------------------------
Route::middleware(['role:Admin'])->group(function () {
        Route::get('/roadmap-nodes', [RoadmapNodeController::class, 'index'])->name('roadmapNodes.index');
        Route::post('/roadmap-nodes', [RoadmapNodeController::class, 'store'])->name('roadmapNodes.store');
        
    });
    
    
    Route::controller(RoadmapNodeController::class)->prefix('admin')->middleware(['auth', 'verified'])->group(function() {
        Route::get('/roadmaps', 'index')->name('roadmaps.index');
        Route::post('/roadmaps', 'store')->name('roadmaps.store'); 
        Route::get('/roadmaps/edit/{id}', 'edit')->name('roadmaps.edit');
        Route::put('/roadmaps/{id}', 'update')->name('roadmaps.update');
        Route::get('/roadmaps/delete/{id}', 'destroy')->name('roadmaps.destroy');
    });

});



require __DIR__.'/auth.php';
