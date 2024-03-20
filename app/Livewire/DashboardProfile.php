<?php

namespace App\Livewire;

use App\Models\Proposal;
use App\Models\Vote;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardProfile extends Component
{
    public $setting;
    public $user;
    public $allEditions;
    public $count_votes_winner_proposal;
    public $total_votes;
    public $averageVotesOnAllEditions;
    public $votesPerEditionJson;
    public $editionNamesJson;
    public function mount()
    {
        // Get all editions
        $this->allEditions = \App\Models\Edition::all();

        $this->user = Auth::user();

//     Votes on Winner Proposals
        $this->count_votes_winner_proposal = Proposal::where('user_id', $this->user->id)
            ->where('winner', 1)
            ->count();

//        GET TOTAL VOTES
        $this->total_votes = Vote::where('user_id', $this->user->id)
            ->count();

        $this->getAverageVotesOnAllEditions();

        $this->getVotesPerEdition();

        $this->setting = \App\Models\Setting::first();
    }

    protected function getVotesPerEdition()
    {
        $editionNames = [];
        $votesPerEdition = [];

        // Iterate through each edition
        foreach ($this->allEditions as $edition) {
            // Get edition name
            $editionNames[] = $edition->identifier;

            // Count the number of votes the user cast on this edition's proposals
            $votesOnEdition = $edition->proposals()
                ->whereHas('votes', function ($query) {
                    $query->where('user_id', $this->user->id);
                })
                ->count();

            // Add the votes for this edition to the array
            $votesPerEdition[] = $votesOnEdition;
        }

        // Convert arrays to JSON format for use in JavaScript
        $this->editionNamesJson = json_encode($editionNames);
        $this->votesPerEditionJson = json_encode($votesPerEdition);

        $this->dispatch('chartData', $this->editionNamesJson, $this->votesPerEditionJson);

    }
    protected function getAverageVotesOnAllEditions()
    {

        // Initialize total votes and edition count
        $totalVotes = 0;
        $editionCount = 0;

        // Calculate total votes across all editions
        foreach ($this->allEditions as $edition) {
            // Count the number of votes the user cast on this edition's proposals
            $votesOnEdition = $edition->proposals()
                ->whereHas('votes', function ($query) {
                    $query->where('user_id', $this->user->id);
                })
                ->count();
            if($votesOnEdition > 0)
            {
                ++$editionCount;
                $totalVotes += $votesOnEdition;
            }
        }

        // Calculate the average votes per edition
        if ($editionCount > 0) {
            $this->averageVotesOnAllEditions = number_format($totalVotes / $editionCount, 2);
        } else {
            $this->averageVotesOnAllEditions = 0;
        }
    }
    public function render()
    {
        return view('livewire.profile.dashboard-profile');
    }
}
