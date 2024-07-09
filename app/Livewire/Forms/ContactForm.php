<?php

namespace App\Livewire\Forms;

use App\Models\ContactRequest;
use Illuminate\Validation\ValidationException;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Component;

class ContactForm extends Component
{
    use InteractsWithBanner;
    public $name;
    public $email;
    public $phone;
    public $need_help_with = [];
    public $message;

    private function clearVars()
    {
        $this->name = null;
        $this->email = null;
        $this->phone = null;
        $this->need_help_with = [];
        $this->message = null;
    }

    public function submit()
    {
        $this->validate([
            'name' => "required|string|max:255",
            'email' => "required|email|string|max:255",
            'phone' => "required",
        ]);
        if (empty($this->need_help_with) || count($this->need_help_with) == 0) {
            throw ValidationException::withMessages(['need_help_with' => "Please select a type."]);
        }

        ContactRequest::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'need_help_with' => json_encode($this->need_help_with),
            'message' => $this->message,
        ]);

        $this->clearVars();

        $this->banner('Thanks for your request. We will get back to you soon');
    }

    public function render()
    {
        return view('livewire.forms.contact-form');
    }
}
