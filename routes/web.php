<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
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


//Bat buoc dang nhap
Route::middleware('auth')->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/categories', [BookController::class, 'index01']);
    Route::prefix('admin')->middleware('can:role')->group(function () {
        Route::resource('users', UserController::class);
        Route::get('dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

    });
});

//Khong can dang nhap
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/login', [LoginController::class, 'showForm'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('login');
Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register', [LoginController::class, 'postregister'])->name('register');

Route::resource('/books', BookController::class);
Route::get('listbook', [BookController::class, 'index01'])->name('index01');

Route::fallback(function () {
    return view('pages.404');
});

// Route::get('/', function () {
//     //return view('welcome');
//     return view('pages.home');
// });
