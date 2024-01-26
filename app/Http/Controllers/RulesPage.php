<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RulesPage extends Controller
{
    public function show()
    {
        return view('site.regulamento.index');
    }
}
