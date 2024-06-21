<?php

namespace App\Http\Controllers;

use App\Models\FiddyKitchenQuery;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function products()
    {
        // Fetch product images from the database
        // $products = Product::all();
        
        // // Prepare an array to store image URLs
        // $images = [];

        // // Loop through the products and extract image URLs
        // foreach ($products as $product) {
        //     $images[] = asset($product->image_path);
        // }

        // Pass the image URLs to the view
        return view('fiddy.our-products');
    }
    public function about_us()
    {
        return view('fiddy.about-us');
    }

    public function home()
    {
        return view('fiddy.home');
    }

    public function career()
    {
        return view('fiddy.career');
    }
    public function contact()
    {
        return view('fiddy.contact-us');
    }
    public function jobs()
    {
        return view('fiddy.jobs.job-openings');
    }
    public function job_details()
    {
        return view('fiddy.jobs.job-details');
    }
    public function kitchen_estimator()
    {
        return view('fiddy.kitchen-estimator');
    }
    public function wardrobe_estimator()
    {
        return view('fiddy.wardrobe-estimator');
    }
    public function interior_estimator()
    {
        return view('fiddy.interior-estimator');
    }
    public function manage_kitchen_submissions()
    {

        return view('manage.manage-kitchen-submissions');
    }
    public function manage_wardrobe_submissions()
    {
        return view('manage.manage-wardrobe-submissions');
    }
    public function manage_interior_submissions()
    {
        return view('manage.manage-interior-submissions');
    }
}
