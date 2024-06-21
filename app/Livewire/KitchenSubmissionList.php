<?php

namespace App\Livewire;

use App\Models\FiddyKitchenQuery;
use Livewire\Component;

class KitchenSubmissionList extends Component
{
    public $item;
    public function show($id)
    {
        $this->item = FiddyKitchenQuery::where("id", $id)->first();
        $this->dispatch("toggleModal");
    }
    public function closeModal()
    {
        $this->dispatch('closeModal');
    }
    public function render()
    {
        $data = FiddyKitchenQuery::all();
        return view('livewire.kitchen-submission-list', ['data' => $data]);
    }
}
