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

//Route::get('/', function () {
//  return redirect("https://www.fiddy.in");
//});
Route::get('/price-estimator/kitchen', 'App\Http\Controllers\HomeController@kitchen_estimator');
Route::get('/price-estimator/wardrobe', 'App\Http\Controllers\HomeController@wardrobe_estimator');
Route::get('/price-estimator/interior', 'App\Http\Controllers\HomeController@interior_estimator');
Route::get('/studio', 'App\Http\Controllers\HomeController@about_us');
Route::get('/products', 'App\Http\Controllers\HomeController@products');
Route::get('/career', 'App\Http\Controllers\HomeController@career');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
