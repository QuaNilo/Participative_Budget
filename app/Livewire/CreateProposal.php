<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Proposal;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class CreateProposal extends ModalComponent
{
    use WithFileUploads;


//    #[Validate(['files.*' => 'image|max:1024'])]
    public $files;
    public Proposal $proposal;
    public  $title;
    public  $content;
    public  $summary;

    public function mount(): void
    {
        $this->proposal = new Proposal();
    }

    public function submit()
    {

        dd($this);
//        $formSubmission = Proposal::create([
//        ]);

//        $formSubmission
//            ->addFromMediaLibraryRequest($this->myUpload)
//            ->toMediaCollection('images');
//
//        $this->message = 'Your form has been submitted';
//
//        $this->name = '';
//        $this->myUpload = null;
    }

    public function render(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $categories = Category::get();
        return view('livewire.propostas.create-proposal', ['categories' => $categories]);
    }
}
