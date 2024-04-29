<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ImageModal extends Component
{
    public $imageUrl;

    public function render()
    {
        return view('livewire.image-modal');
    }
}
