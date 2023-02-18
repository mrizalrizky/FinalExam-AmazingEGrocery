<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
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


Route::view('/', 'pages.index')->name('welcome');
Route::view('register', 'pages.auth.register');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::view('login', 'pages.auth.login');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('logout-success', [AuthController::class, 'success'])->name('logout.success');

Route::middleware(['auth'])->group(function () {
    Route::get('home', [ItemController::class, 'index'])->name('home');
    Route::get('cart', [CartController::class, 'index'])->name('cart');
    Route::post('cart', [CartController::class, 'store'])->name('cart.store');
    Route::delete('cart', [CartController::class, 'removeFromCart'])->name('remove-from-cart');
    Route::get('success', [CartController::class, 'success']);
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.save');
    Route::get('saved', [ProfileController::class, 'saved']);
    Route::get('item/{id}', [ItemController::class, 'showDetail']);
    Route::delete('success', [CartController::class, 'checkout'])->name('item.destroy');

    Route::prefix('admin')->middleware('admin.access')->group(function() {
        Route::get('/', [AdminController::class, 'index'])->name('admin');
        Route::get('update-role/{id}', [AdminController::class, 'show'])->name('role.update');
        Route::put('update-role/{id}', [AdminController::class, 'edit'])->name('user.role.update');
        Route::delete('/', [AdminController::class, 'userDestroy'])->name('user.destroy');
    });
});
