<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CreateProposal extends ModalComponent
{
    public function render()
    {
        $categories = Category::get();
        return view('livewire.propostas.create-proposal', ['categories' => $categories]);
    }
}
