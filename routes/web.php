<?php

use App\Http\Controllers\BankController;

use Illuminate\Support\Facades\Route;


Route::get('/', [BankController::class, 'index'])->name('home');
Route::get('/about', [BankController::class, 'about']);
Route::get('/contact', [BankController::class, 'contact']);
Route::get('/deposite', [BankController::class, 'deposite']);
Route::get('/withdraw', [BankController::class, 'withdraw']);
Route::get('/create', [BankController::class, 'createAccount']);
Route::get('/pin', [BankController::class, 'pinChange']);
Route::get('/summary', [BankController::class, 'summary']);
Route::get('/fund', [BankController::class, 'fundtransfer']);
Route::get('/login', [BankController::class,'Login']);