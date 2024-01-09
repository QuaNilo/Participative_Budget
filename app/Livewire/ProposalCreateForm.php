<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Request;

class ProposalCreateForm extends Component
{
    public $coordinateX;
    public $coordinateY;

    public function mount()
    {
        $this->coordinateY = null;
        $this->coordinateX = null;
    }
    public function render()
    {
        $categories = Category::get();
        return view('livewire.propostas.create.proposal-create-form', ['categories' => $categories]);
    }

    public function updateMarkerPosition(Request $request)
    {
        // Get the clickedLatLng from the AJAX request
        $clickedLatLng = $request->input('clickedLatLng');

        $this->coordinateX = $clickedLatLng['lat'];
        $this->coordinateY = $clickedLatLng['lng'];
        dd($this->coordinateX);

        return response()->json(['message' => 'Marker position updated successfully']);
    }
}
