<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyProfileController;

Route::get('/', [CompanyProfileController::class, 'index'])->name('home');
Route::post('/contact', [CompanyProfileController::class, 'contactStore'])->name('contact.store');
