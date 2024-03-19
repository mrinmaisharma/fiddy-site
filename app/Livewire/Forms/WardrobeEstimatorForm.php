<?php

namespace App\Livewire\Forms;

use App\Models\FiddyWardrobeQuery;
use Livewire\Component;
use NumberFormatter;

class WardrobeEstimatorForm extends Component
{
    public $wardrobe_type;
    public $finish_type;
    public $material;

    public $width;
    public $height;

    public $name;
    public $email;
    public $phone_number;
    public $message;

    public $step=1;
    public $saved=false;
    public $estimate;

    public function openForm() {
        $this->validate([
            'wardrobe_type'=>'required',
            'finish_type'=>'required',
            'material'=>'required',
            'width'=>'required|numeric|min:1',
            'height'=>'required|numeric|min:1',
        ]);
        $this->step=2;
    }

    public function save() {
        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone_number'=>'required',
        ]);
        $area=($this->width * $this->height);
        $rate=0;
        if($this->wardrobe_type=='hinged') {
            $rate = $this->finish_type=='laminate' ? 1750 : ($this->finish_type=='acrylic' ? 2250 : 2450);
        } elseif($this->wardrobe_type=='sliding') {
            $rate = $this->finish_type=='laminate' ? 2250 : ($this->finish_type=='acrylic' ? 2650 : 2850);
        }
        $estimate = $area*$rate;
        $estimate = $estimate*1.18;
        $fmt = new NumberFormatter( 'en_IN', NumberFormatter::CURRENCY );
        FiddyWardrobeQuery::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'phone_number'=>$this->phone_number,
            'wardrobe_type'=>$this->wardrobe_type,
            'finish_type'=>$this->finish_type,
            'material'=>$this->material,
            'width'=>$this->width,
            'height'=>$this->height,
            'total_estimate'=>round($estimate),
            'shared_estimate'=>"Your total estimate is: ".$fmt->formatCurrency(round($estimate), "INR")
        ]);
        $this->dispatch('notify', message: "Query submitted successfully.");
        $this->estimate = $fmt->formatCurrency(round($estimate), "INR");
        $this->saved=true;
    }

    public function render()
    {
        return view('livewire.forms.wardrobe-estimator-form');
    }
}
