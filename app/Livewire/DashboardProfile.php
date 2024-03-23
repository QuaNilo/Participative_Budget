<?php

namespace App\Livewire;

use App\Models\Citizen;
use App\Models\Proposal;
use App\Models\Vote;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardProfile extends Component
{
    public $setting;
    public $user;
    public $allEditions;
    public $allCategories;
    public $count_votes_winner_proposal;
    public $total_votes;
    public $averageVotesOnAllEditions;
    public $votesPerEditionJson;
    public $editionNamesJson;
    public $votesPerCategoryJson;
    public $categoryNamesJson;
    public $total_impressions;
    public $selectedTab;
    public $genderVotes;
    public $genderNames;
    public function mount()
    {
        $this->selectedTab = 'votes';
        // Get all editions
        $this->allEditions = \App\Models\Edition::all();
        $this->allCategories = \App\Models\Category::all();

        $this->user = Auth::user();

//     Votes on Winner Proposals
        $this->count_votes_winner_proposal = Proposal::where('user_id', $this->user->id)
            ->where('winner', 1)
            ->count();

//        GET TOTAL VOTES
        $this->total_votes = Vote::where('user_id', $this->user->id)
            ->count();

//        GET TOTAL IMPRESSIONS ON MY PROPOSALS
        $this->total_impressions = auth()->user()->proposals()->sum('impressions');

        $this->getAverageVotesOnAllEditions();

        $this->getVotesPerEdition();
        $this->getVotesPerCategory();
        if(auth()->user()->proposals()->exists())
        {
            $this->getVotesPerGender();
        }

        $this->setting = \App\Models\Setting::first();
    }

    protected function getVotesPerCategory()
    {
        $categoryNames = [];
        $votesPerCategory = [];

        // Iterate through each edition
        foreach ($this->allCategories as $category) {
            // Get edition name
            $categoryNames[] = $category->name;

            // Count the number of votes the user cast on this edition's proposals
            $votesOnEdition = $category->proposals()
                ->whereHas('votes', function ($query) {
                    $query->where('user_id', $this->user->id);
                })
                ->count();

            // Add the votes for this edition to the array
            $votesPerCategory[] = $votesOnEdition;
        }

        // Convert arrays to JSON format for use in JavaScript
        $this->categoryNamesJson = json_encode($categoryNames);
        $this->votesPerCategoryJson = json_encode($votesPerCategory);

    }



    protected function getVotesPerGender()
    {
        $genderVotes = [
            Citizen::GENDER_UNDEFINED => 0,
            Citizen::GENDER_FEMALE => 0,
            Citizen::GENDER_MALE => 0
        ];
        $this->genderNames = json_encode(Citizen::getGenderArray());

        // Iterate through each edition
        foreach ($this->user->proposals as $proposal) {
            foreach ($proposal->votes as $vote)
            {
                ++$genderVotes[$vote->user->citizen->gender];
            }
        }
        // Convert arrays to JSON format for use in JavaScript
        $this->genderVotes = json_encode($genderVotes);
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

    public function toggleTab($tab)
    {
        $this->selectedTab = $tab;
    }
    public function render()
    {
        return view('livewire.profile.dashboard-profile');
    }
}
