<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Accounts;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;

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
// Route::get('/', function () {
//     return redirect(app()->getLocale());
// });


// Route::prefix('{locale}')
//     ->where(['locale' => '[a-zA-Z]{2}'])
//     ->middleware('setlocale')
//     ->group(function (){

Route::middleware(['guest:accounts'])->group(function () {
    Route::get('/', function () {
        return view('welcome', ['locale' => '{locale}']);
    });
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});
Route::middleware(['auth:accounts'])->group(function () {
    Route::get('/logout', function () {
        Auth::logout();
        return view('auth.logout');
    });

    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('/detailitem/{id}', [ItemController::class, 'detail']);
    Route::post('/add/{id}', [CartController::class, 'add']);
    Route::get('/cart', [CartController::class, 'cart']);
    Route::delete('/cart/{id}', [CartController::class, 'remove']);
    Route::post('/cart', [CartController::class, 'order']);
    Route::get('/success', function () {
        return view('success');
    });
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::post('/profile', [ProfileController::class, 'update']);
    Route::get('/saved', function () {
        return view('saved');
    });


    Route::middleware(['role:1'])->group(function () {
        Route::get('account', [AccountController::class, 'index']);
        Route::get('updateRole/{id}', [AccountController::class, 'update']);
        Route::post('updateRole/{id}', [AccountController::class, 'save']);
        Route::get('delete/{id}', [AccountController::class, 'delete']);
    });
});
// });