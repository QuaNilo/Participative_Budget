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
        $currentEditionStatusList = [
            Edition::STATUS_PENDING,
            Edition::STATUS_OPEN,
            Edition::STATUS_VOTING,
            Edition::STATUS_ANALYSIS,
        ];
        $this->editions = Edition::with('proposals')
            ->whereNotIn('status', $currentEditionStatusList)
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
