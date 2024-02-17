<?php

namespace App\Livewire;

use App\Models\Proposal;
use App\Models\Vote;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Voting extends Component
{
    public $has_voted;
    public $user;
    public $proposal_id;
    public $proposal;

    public function mount()
    {

        $this->user = auth()->user();
        $this->has_voted = $this->user->votes->where('proposal_id', $this->proposal_id)->isNotEmpty() ?? false;
    }


    public function vote()
    {
        if (\App\Models\Setting::first()->require_cc_vote_create && !auth()->user()->citizen->CC_verified) {
            flash(__('Your Citizen Card needs to be validated to Vote on Proposals'))->overlay()->warning()->duration(4000);
            return redirect()->route('proposta-detail', $this->proposal_id);
        }

        if(\App\Models\Setting::first()->require_address_vote_create && !auth()->user()->citizen->address_verified) {
            flash(__('Your Address needs to be validated to Vote on Proposals'))->overlay()->warning()->duration(4000);
            return redirect()->route('proposta-detail', $this->proposal_id);
        }

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
        $this->proposal = Proposal::with('user', 'category')
            ->where('id', $this->proposal_id)
            ->withCount('votes')
            ->first();
        return view('livewire.propostas.voting');
    }
}
