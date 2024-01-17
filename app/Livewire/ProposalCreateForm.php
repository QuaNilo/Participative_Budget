<?php

namespace App\Livewire;

use App\Http\Requests\CreateProposalRequest;
use App\Livewire\Forms\ProposalForm;
use App\Models\Category;
use App\Models\Proposal;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProposalCreateForm extends Component
{
//    public ProposalForm $form;
    public Proposal $proposal;

    public function mount()
    {
    }

    public function render()
    {
        $categories = Category::get();
        return view('livewire.propostas.create.proposal-create-form', ['categories' => $categories]);
    }


}
