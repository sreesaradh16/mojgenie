<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

//register
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('post-register', [AuthController::class, 'postRegister'])->name('post_register');

//login
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('post_login');


Route::middleware(['auth'])->group(function () {
    // home
    Route::get('home', [UserController::class, 'home'])->name('home');

    // deposit
    Route::get('deposit', [UserController::class, 'deposit'])->name('deposit');
    Route::post('deposit/money', [UserController::class, 'depositMoney'])->name('deposit_money');

    // withdraw
    Route::get('withdraw', [UserController::class, 'withdraw'])->name('withdraw');
    Route::post('withdraw/money', [UserController::class, 'withdrawMoney'])->name('withdraw_money');

    // transfer
    Route::get('transfer', [UserController::class, 'transfer'])->name('transfer');
    Route::post('transfer/money', [UserController::class, 'transferMoney'])->name('transfer_money');

    // statement
    Route::get('statement', [UserController::class, 'statement'])->name('statement');

    //logout
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
