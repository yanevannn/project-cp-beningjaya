<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/review', [HomeController::class, 'review'])->name('review');
Route::post('/review', [HomeController::class, 'doReview'])->name('doReview');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin'])->name('doLogin');

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    //products
    route::group(['prefix' => 'dashboard'], function () {
        Route::get('/products', [ProductController::class, 'index'])->name('products.index');
        Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
        Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
        Route::put('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');
        Route::delete('/products/delete/{id}', [ProductController::class, 'destroy'])->name('products.delete');

        Route::get('testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');
        Route::post('testimoni/store', [TestimoniController::class, 'store'])->name('testimoni.store');
        Route::put('testimoni/update/{id}', [TestimoniController::class, 'update'])->name('testimoni.update');
        Route::delete('testimoni/delete/{id}', [TestimoniController::class, 'destroy'])->name('testimoni.delete');

        Route::get('gallery', [GaleriController::class, 'index'])->name('gallery.index');
        Route::post('gallery/store', [GaleriController::class, 'store'])->name('gallery.store');
        Route::delete('gallery/delete/{id}', [GaleriController::class, 'destroy'])->name('gallery.delete');
    });
});
