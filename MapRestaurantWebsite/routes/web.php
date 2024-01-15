<?php

use App\Http\Controllers\About;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route for guest
Route::get('/test', function () {
    return view('test')->name('test');
});

Route::get('/about', [About::class, 'show'])->name('about');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/news', [NewsController::class, 'show'])->name('news');
Route::get('/menus', [MenuController::class, 'show'])->name('menus');
Route::get('/contacts', [ContactController::class, 'show'])->name('contacts');
Route::get('/questions', [QuestionController::class, 'show'])->name('questions');
Route::get('/reservations', [ReservationController::class, 'show'])->name('reservations');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Routes for user or admin already logged in
Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/menus', MenuController::class);
    Route::resource('/tables', TableController::class);
    Route::resource('/reservations', ReservationController::class);
    Route::resource('/news', NewsController::class);
    Route::resource('/contacts', ContactController::class);
    Route::resource('/questions', QuestionController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__ . '/auth.php';
