<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
});
Route::post('/submit-form', [FormController::class, 'submit'])->name('submit-form');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

