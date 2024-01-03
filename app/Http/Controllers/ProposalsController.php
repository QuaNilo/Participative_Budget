<?php

namespace App\Http\Controllers;

use App\Models\proposal;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProposalsController extends Controller
{

    public function index() : View
    {
        return view('site.propostas.index');
    }


}
