<?php

namespace App\Http\Controllers;

use App\Models\Edition;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MapController extends Controller
{
    public function index(Edition $edition) : View
    {
        if($edition->identifier)
        {
            $proposals = Proposal::with('category', 'user')->where('edition_id', $edition->id)
                ->get();
        }
        else
        {
            $proposals = Proposal::get();
        }
        return view('site.mapa.index', ['proposals' => $proposals, 'edition' => $edition]);
    }
}
