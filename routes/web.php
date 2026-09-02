<?php
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::resource('customers', CustomerController::class);