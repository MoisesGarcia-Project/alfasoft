<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\RegisterController;

// UserAuth
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/', [UserAuth::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/', [UserAuth::class, 'store'])
    ->name('login.store');
    
Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');*/
    
    Route::get('/', [ContactsController::class, 'index'])->name('index');
    Route::get('/create', [ContactsController::class, 'create'])->name('create');
    Route::get('/edit/{id} ', [ContactsController::class, 'edit'])->name('edit');
    Route::post('/store ', [ContactsController::class, 'store'])->name('store');
    Route::put('/update/{id} ', [ContactsController::class, 'update'])->name('update');
    Route::delete('/delete/{id} ', [ContactsController::class, 'destroy'])->name('destroy');








