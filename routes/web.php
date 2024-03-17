<?php

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

Route::get('/', function () {
    return redirect("https://www.fiddy.in");
});
Route::get('/price-estimator/kitchen', function () {
    return view('fiddy.kitchen-estimator');
});
Route::get('/price-estimator/wardrobe', function () {
    return view('fiddy.wardrobe-estimator');
});
Route::get('/price-estimator/interior', function () {
    return view('fiddy.interior-estimator');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
