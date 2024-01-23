<?php

namespace App\Livewire;

use App\Models\Edition;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ShowEditionsGrid extends Component
{
    public $editions;

    public function mount(): void
    {
        $this->editions = Edition::with('proposals')
            ->withCount('proposals')
            ->get();
    }
    public function render(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('livewire.edition.show-editions-grid');
    }
}
