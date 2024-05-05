<?php

namespace App\Livewire;

use App\Models\FiddyInteriorQuery;
use Livewire\Component;

class InteriorSubmissionList extends Component
{
    public $item;
    public function show($id)
    {
        $this->item = FiddyInteriorQuery::where("id", $id)->first();
        $this->dispatch("toggleModal");
    }
    public function render()
    {
        $data = FiddyInteriorQuery::all();
        return view('livewire.interior-submission-list', ['data' => $data]);
    }
}
