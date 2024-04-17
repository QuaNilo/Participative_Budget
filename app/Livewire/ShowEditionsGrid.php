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
            ->whereIn('status', Edition::EDITION_INACTIVE_STATUS_LIST)
            ->withCount('proposals')
            ->orderByDesc('identifier')
            ->get();

        if($this->editions->isEmpty())
        {
            $this->redirect(route('display_warning', ['message' => __("Oops, There isn't any completed Edition")]));
        }
    }
    public function render(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('livewire.edition.show-editions-grid');
    }
}
