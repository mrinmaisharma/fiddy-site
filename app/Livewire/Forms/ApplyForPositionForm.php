<?php

namespace App\Livewire\Forms;

use Livewire\Component;
use Livewire\WithFileUploads;

class ApplyForPositionForm extends Component
{
    use WithFileUploads;

    public $name;
    public $phone;
    public $email;
    public $coverLetter;
    public $resume;
    public $termsAndConditions;

    protected $rules = [
        'name' => 'required|string',
        'phone' => 'required|string',
        'email' => 'required|email',
        'coverLetter' => 'nullable|string',
        'resume' => 'nullable|file|max:10240', // Max file size of 10MB
        'termsAndConditions' => 'required|accepted',
    ];
    public function render()
    {
        return view('livewire.forms.apply-for-position-form');
    }
    public function submit()
    {
        $validatedData = $this->validate();

        // Handle file upload if a resume is provided
        if ($this->resume) {
            $path = $this->resume->store('resumes', 'public');
            $validatedData['resume_path'] = $path;
        }

        // Process the application (e.g., save to database)

        $this->reset(); // Clear form fields after submission
        session()->flash('message', 'Your application has been submitted successfully!');
    }
}
