<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFEController extends Controller
{
    protected $hasProposals;
    protected $hasVotes;
    public function show_proposals()
    {
        $hasVotes = !auth()->user()->votes->isEmpty();
        $hasProposals = !auth()->user()->proposals->isEmpty();
        return view('site.profile.index', ['hasVotes' => $hasVotes, 'hasProposals' => $hasProposals, 'tab' => 'proposals']);
    }

    public function show_votes()
    {
        $hasVotes = !auth()->user()->votes->isEmpty();
        $hasProposals = !auth()->user()->proposals->isEmpty();
        return view('site.profile.index', ['hasVotes' => $hasVotes, 'hasProposals' => $hasProposals, 'tab' => 'votes']);
    }


    public function show_details()
    {
        $hasVotes = !auth()->user()->votes->isEmpty();
        $hasProposals = !auth()->user()->proposals->isEmpty();
        return view('site.profile.index', ['hasVotes' => $hasVotes, 'hasProposals' => $hasProposals, 'tab' => 'details']);
    }

    public function show_password()
    {
        $hasVotes = !auth()->user()->votes->isEmpty();
        $hasProposals = !auth()->user()->proposals->isEmpty();
        return view('site.profile.index', ['hasVotes' => $hasVotes, 'hasProposals' => $hasProposals, 'tab' => 'password']);
    }

    public function show($tab)
    {
        $hasVotes = !auth()->user()->votes->isEmpty();
        $hasProposals = !auth()->user()->proposals->isEmpty();
        return view('site.profile.index', ['hasVotes' => $hasVotes, 'hasProposals' => $hasProposals, 'tab' => $tab]);
    }

    public function show_dashboard()
    {
        $hasVotes = !auth()->user()->votes->isEmpty();
        $hasProposals = !auth()->user()->proposals->isEmpty();
        return view('site.profile.index', ['hasVotes' => $hasVotes, 'hasProposals' => $hasProposals, 'tab' => 'dashboard']);
    }
}
