<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\AddController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::post('/search', [BasketController::class, 'addToBasket'])->name('basket');

Route::get('/add', [AddController::class, 'addArticle'])->name('add');
Route::post('/add', [AddController::class, 'storeArticle'])->name('add')->name('add');


Route::get ('/basket', [BasketController::class, 'displayBasket'])->name('showBasket');


require __DIR__.'/auth.php';




