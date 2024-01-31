<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MapController extends Controller
{
    public function index($id = null) : View
    {
        if($id)
        {
            $proposals = Proposal::where('edition_id', $id)
                ->get();
        }
        else
        {
            $proposals = Proposal::get();
        }

        return view('site.mapa.index', ['proposals' => $proposals]);
    }
}
