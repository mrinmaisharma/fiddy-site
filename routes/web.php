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
Route::get('/', 'App\Http\Controllers\HomeController@home');
Route::get('/price-estimator/kitchen', 'App\Http\Controllers\HomeController@kitchen_estimator');
Route::get('/price-estimator/wardrobe', 'App\Http\Controllers\HomeController@wardrobe_estimator');
Route::get('/price-estimator/interior', 'App\Http\Controllers\HomeController@interior_estimator');
Route::get('/studio', 'App\Http\Controllers\HomeController@about_us');
Route::get('/products', 'App\Http\Controllers\HomeController@products');
Route::get('/career', 'App\Http\Controllers\HomeController@career');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact');
Route::get('/jobs', 'App\Http\Controllers\HomeController@jobs');
Route::get('/jobs/job-details', 'App\Http\Controllers\HomeController@job_details');
Route::get('/manage-kitchen-submissions', 'App\Http\Controllers\HomeController@manage_kitchen_submissions');
Route::get('/manage-wardrobe-submissions', 'App\Http\Controllers\HomeController@manage_wardrobe_submissions');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
