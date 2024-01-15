<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;

class ProposalFEController extends Controller
{
    public function show_frontend()
    {
        return view('site.propostas.index');
    }

    public function show_frontend_create()
    {
        return view('site.propostas.create.index');
    }

    public function show_proposal($id)
    {
        $proposal = Proposal::find($id);
        return view('site.propostas.proposta.index', ['proposal' => $proposal]);
    }
}
