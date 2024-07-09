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

Route::get('/', [\App\Http\Controllers\HomeController::class, "home"])->name('home');
Route::get('/price-estimator/kitchen', [\App\Http\Controllers\HomeController::class, "kitchen_estimator"]);
Route::get('/price-estimator/wardrobe', [\App\Http\Controllers\HomeController::class, "wardrobe_estimator"]);
Route::get('/price-estimator/interior', [\App\Http\Controllers\HomeController::class, "interior_estimator"]);
Route::get('/studio', [\App\Http\Controllers\HomeController::class, "about_us"]);
Route::get('/products', [\App\Http\Controllers\HomeController::class, "products"]);
Route::get('/career', [\App\Http\Controllers\HomeController::class, "career"]);
Route::get('/contact', [\App\Http\Controllers\HomeController::class, "contact"]);
Route::get('/jobs', [\App\Http\Controllers\HomeController::class, "jobs"]);
Route::get('/jobs/job-details', [\App\Http\Controllers\HomeController::class, "job_details"]);
Route::get('/manage-kitchen-submissions', [\App\Http\Controllers\HomeController::class, "manage_kitchen_submissions"]);
Route::get('/manage-wardrobe-submissions', [\App\Http\Controllers\HomeController::class, "manage_wardrobe_submissions"]);
Route::get('/manage-interior-submissions', [\App\Http\Controllers\HomeController::class, "manage_interior_submissions"]);
Route::get('/manage-products', [\App\Http\Controllers\ProductController::class, "manageProducts"]);

Route::prefix('dashboard')
    ->group(function () {
        Route::resource('products', \App\Http\Controllers\ProductController::class);
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
