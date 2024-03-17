<?php

namespace App\Livewire\Forms;

use App\Models\FiddyKitchenQuery;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use NumberFormatter;

class KitchenEstimatorForm extends Component
{
    public $kitchen_type=0;
    public $finish_type;

    public $length_a=0;
    public $breadth_a=2.5;
    public $height_a=2.5;

    public $length_b=0;
    public $breadth_b=2.5;
    public $height_b=2.5;

    public $length_c=0;
    public $breadth_c=2.5;
    public $height_c=2.5;

    public $name;
    public $email;
    public $phone_number;
    public $message;

    public $step=1;
    public $saved=false;
    public $estimate;

    public function openForm() {
        $this->validate([
            'finish_type'=>'required',
        ]);
        if(empty($this->kitchen_type) && $this->kitchen_type=='0') {
            throw ValidationException::withMessages(['kitchen_type'=>"Please select kitchen type"]);
        }
        $this->step=2;
    }
    public function save() {
        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone_number'=>'required',
            'length_a'=>'required|numeric|gte:1',
            'breadth_a'=>'required|numeric|gte:1',
            'height_a'=>'required|numeric|gte:1',
        ]);
        if($this->kitchen_type!='straight') {
            $this->validate([
                'length_b'=>'required|numeric|gte:1',
                'breadth_b'=>'required|numeric|gte:1',
                'height_b'=>'required|numeric|gte:1',
            ]);
        }
        if($this->kitchen_type=='u-shaped') {
            $this->validate([
                'length_c'=>'required|numeric|gte:1',
                'breadth_c'=>'required|numeric|gte:1',
                'height_c'=>'required|numeric|gte:1',
            ]);
        }
        $estimate=((($this->length_a * $this->breadth_a) + ($this->length_b * $this->breadth_b) + ($this->length_c * $this->breadth_c)) * 1.75 * ($this->finish_type == 'acrylic' ? 1750 : 1625)) + 75000;
        $estimate = $estimate * 1.18;
        $fmt = new NumberFormatter( 'en_IN', NumberFormatter::CURRENCY );
        FiddyKitchenQuery::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'phone_number'=>$this->phone_number,
            'shape'=>$this->kitchen_type,
            'finish'=>$this->finish_type,
            'a_length'=>$this->length_a,
            'a_breadth'=>$this->breadth_a,
            'a_height'=>$this->height_a,
            'b_length'=>$this->length_b,
            'b_breadth'=>$this->breadth_b,
            'b_height'=>$this->height_b,
            'c_length'=>$this->length_c,
            'c_breadth'=>$this->breadth_c,
            'c_height'=>$this->height_c,
            'total_estimate'=>round($estimate),
            'shared_estimate'=>"Your total estimate is: ".$fmt->formatCurrency(round($estimate), "INR (incl. GST)")
        ]);
        $this->dispatch('notify', message: "Query submitted successfully.");
        $this->estimate = $fmt->formatCurrency(round($estimate), "INR");
        $this->saved=true;
    }

    public function render()
    {
        $this->dispatch('triggerResize');
        return view('livewire.forms.kitchen-estimator-form');
    }
}
