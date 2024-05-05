<?php

namespace App\Livewire;

use App\Models\FiddyWardrobeQuery;
use Livewire\Component;

class WardrobeSubmissionList extends Component
{
    public $item;
    public function show($id)
    {
        $this->item = FiddyWardrobeQuery::where("id", $id)->first();
        $this->dispatch("toggleModal");
    }
    public function closeModal()
    {
        $this->dispatch('closeModal');
    }
    public function render()
    {
        $data = FiddyWardrobeQuery::all();
        return view('livewire.wardrobe-submission-list', ['data' => $data]);
    }
}
