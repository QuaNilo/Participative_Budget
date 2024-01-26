<?php

namespace App\Livewire;

use App\Models\Vote;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Livewire\Component;

class Voting extends Component
{
    public $has_voted;
    public $user;
    public $proposal_id;

    public function mount()
    {
        $this->user = auth()->user();
        $this->has_voted = $this->user->votes->where('proposal_id', $this->proposal_id)->isNotEmpty() ?? false;
    }


    public function vote()
    {

        // Check if the user has already voted for this proposal
        if ($this->has_voted) {
            Vote::where('proposal_id', $this->proposal_id)
                ->where('user_id', $this->user->id)
                ->delete();
            $this->has_voted = false;
            flash(__('Removed Vote successfully.'))->overlay()->success();
        }
        else{
            // If the user hasn't voted, create a new vote record
            Vote::create([
                'user_id' => $this->user->id,
                'proposal_id' => $this->proposal_id
            ]);
            // You can add any additional logic or redirect as needed
            $this->has_voted = true;
            flash(__('Vote recorded successfully.'))->overlay()->success();
        }
    }

    public function render()
    {
        $this->has_voted = $this->user->votes->where('proposal_id', $this->proposal_id)->isNotEmpty() ?? false;

        return view('livewire.propostas.voting');
    }
}
