<?php

namespace App\Livewire;

use Livewire\Component;

class PhotoGalary extends Component
{
    public $images = [];

    public function mount()
    {
        $imageDirectory = public_path('images/fiddy/products');
        $files = scandir($imageDirectory);

        foreach ($files as $file) {
            if ($file === '.' || $file === '..') {
                continue;
            }
            $imageUrl = asset('images/fiddy/products/' . $file);
            $this->images[] = $imageUrl;
        }
    }
    public function render()
    {
        return view('livewire.photo-galary');
    }
}
