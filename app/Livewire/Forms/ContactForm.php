<?php

namespace App\Livewire\Forms;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $kitchen;
    public $bathroom;
    public $wardrobe;
    public $furniture;
    public $howCanHelp;
    public function render()
    {
        return view('livewire.forms.contact-form');
    }
    public function submit()
    {
        // Validation and submission logic here
    }
}
