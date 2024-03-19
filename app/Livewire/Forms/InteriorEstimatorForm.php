<?php

namespace App\Livewire\Forms;

use App\Models\FiddyInteriorQuery;
use Livewire\Component;
use NumberFormatter;

class InteriorEstimatorForm extends Component
{
    public $step=1;
    public $saved=false;
    
    public $name;
    public $email;
    public $phone_number;

    public $type;
    public $packacge;
    public $bedrooms=0;
    public $kitchens=0;
    public $livings=0;
    public $dinings=0;
    public $bathrooms=0;
    public $estimate;

    public $bedroom_rate=200000;
    public $kitchen_rate=255000;
    public $living_rate=210000;
    public $dining_rate=95000;
    public $bathroom_rate=105000;

    public function next() {
        $this->validate([
            "type"=>"required",
            "bedrooms"=>"required",
            "kitchens"=>"required",
            "livings"=>"required",
            "dinings"=>"required",
            "bathrooms"=>"required",
        ],[
            "type.required"=>"Appartment/House type is required",
            "bedrooms.required"=>"This field is required",
            "kitchens.required"=>"This field is required",
            "livings.required"=>"This field is required",
            "dinings.required"=>"This field is required",
            "bathrooms.required"=>"This field is required",
        ]);
        $this->step=2;
    }

    public function save() {
        $this->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'phone_number'=>'required',
        ]);
        $bedroom_rate=$this->bedroom_rate;
        $kitchen_rate=$this->kitchen_rate;
        $living_rate=$this->living_rate;
        $dining_rate=$this->dining_rate;
        $bathroom_rate=$this->bathroom_rate;

        $estimate=($this->bedrooms*$bedroom_rate) + ($this->kitchens*$kitchen_rate) + ($this->livings*$living_rate) + ($this->dinings*$dining_rate) + ($this->bathrooms*$bathroom_rate);
        $estimate = $estimate * 1.18;
        $fmt = new NumberFormatter( 'en_IN', NumberFormatter::CURRENCY );

        FiddyInteriorQuery::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'phone_number'=>$this->phone_number,
            'type'=>$this->type,
            'bedrooms'=>$this->bedrooms,
            'kitchens'=>$this->kitchens,
            'dinings'=>$this->dinings,
            'livings'=>$this->livings,
            'bathrooms'=>$this->bathrooms,
            // 'package'=>$this->package,
            'total_estimate'=>round($estimate),
            'shared_estimate'=>"Your total estimate is: ".$fmt->formatCurrency(round($estimate), "INR")
        ]);
        $this->dispatch('notify', message: "Query submitted successfully.");
        $this->estimate = $fmt->formatCurrency(round($estimate), "INR");
        $this->saved=true;
    }

    public function render()
    {
        $fmt = new NumberFormatter( 'en_IN', NumberFormatter::CURRENCY );
        return view('livewire.forms.interior-estimator-form',compact('fmt'));
    }
}
