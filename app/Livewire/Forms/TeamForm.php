<?php

namespace App\Livewire\Forms;

use Livewire\Component;
use Livewire\WithFileUploads;

class TeamForm extends Component
{
    use WithFileUploads;

    public $name;
    public $phone;
    public $whatsapp;
    public $email;
    public $description;
    public $resume;
    public $checkbox;

    protected $rules = [
        'name' => 'required',
        'phone' => 'required',
        'email' => 'nullable|email',
        'description' => 'nullable|max:70',
        'resume' => 'required|file|max:10240', // 10MB max file size
        'checkbox' => 'required',
    ];
    public function submit()
    {
        $this->validate([
            'resume' => 'required|file|max:10240', // 10MB max file size
        ]);

        // Store the uploaded file
        $this->resume->store('resumes', 'public');

        // Other form submission logic
    }
    public function render()
    {
        return view('livewire.forms.team-form');
    }
}
