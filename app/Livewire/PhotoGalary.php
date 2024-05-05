<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class PhotoGalary extends Component
{
    public $images = [];

    public function mount()
    {
        // Fetch product images from the database
        $products = Product::all();
        
        // Initialize an empty array to store image URLs
        $this->images = [];

        // Loop through the products and extract image URLs
        foreach ($products as $product) {
            $this->images[] = asset('storage/' . $product->image_path);
        }
    }
    public function render()
    {
        return view('livewire.photo-galary');
    }
}
