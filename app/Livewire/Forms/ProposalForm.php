<?php

namespace App\Livewire\Forms;

use App\Models\Proposal;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProposalForm extends Form
{
    public $user_id;

    #[Validate('required|min:5|max:50')]
    public $title = '';

    #[Validate('required|min:5|max:65535')]
    public $content = '';

    #[Validate('required')]
    public $category_id = '';

    #[Validate('required')]
    public $coordinateX;

    #[Validate('required')]
    public $coordinateY;

    #[Validate('nullable')]
    public $file;


    public function save()
    {
        $this->user_id = auth()->id();
        $this->validate();
        Proposal::create(
            $this->all()
        );

        return redirect()->route('propostas');
    }

}
