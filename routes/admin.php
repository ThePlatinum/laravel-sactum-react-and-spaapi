<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('admin')->group(function () {
  // Change this line in production to use subdomain
  // Route::domain('admin.'.env('APP_URL'))->group(function () {

  Route::get('/dashboard', function () {
    return Inertia::render('Admin/Dashboard');
  })->name('admin.dashboard');
});
