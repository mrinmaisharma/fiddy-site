<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function products()
    {
        $images = [];
        $imageDirectory = public_path('images/fiddy/products');
        $files = scandir($imageDirectory);

        foreach ($files as $file) {
            if ($file === '.' || $file === '..') {
                continue;
            }
            $imageUrl = asset('images/fiddy/products/' . $file);
            $images[] = $imageUrl;
        }
        return view('fiddy.our-products', ['imageUrls' => $images]);
    }
    public function about_us()
    {
        return view('fiddy.about-us');
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
}
