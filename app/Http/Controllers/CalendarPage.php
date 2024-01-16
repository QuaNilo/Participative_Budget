<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarPage extends Controller
{
    public function show()
    {
        return view('site.calendario.index');
    }
}
