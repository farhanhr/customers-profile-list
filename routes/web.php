<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('customers/recycle', [CustomerController::class, 'recycleIndex'])->name('customers.recycle');
Route::resource('customers', CustomerController::class);

