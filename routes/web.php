<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NounController;
use App\Http\Controllers\AdjectiveController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::middleware('can:modify,App\Models\Product')->group(function () {
    //     Route::resource('/products/categories', ProductCategoryController::class);
    //     Route::resource('/products', ProductController::class);
    // });

    Route::resource('/nouns', NounController::class);
    Route::resource('/adjectives', AdjectiveController::class);
});

require __DIR__ . '/auth.php';
