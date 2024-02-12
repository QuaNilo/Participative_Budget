<?php

namespace App\Http\Controllers;

use App\Models\Regulation;
use Illuminate\Http\Request;

class RulesPage extends Controller
{
    public function show()
    {
        $regulation = Regulation::with('chapters')->first();
        return view('site.regulamento.index', ['regulation' => $regulation]);
    }
}
