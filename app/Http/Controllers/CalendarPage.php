<?php

namespace App\Http\Controllers;

use App\Models\CalendarDynamic;
use Illuminate\Http\Request;

class CalendarPage extends Controller
{
    public function show()
    {
        $calendar = CalendarDynamic::orderBy('phase')
            ->get();
        return view('site.calendario.index', ['calendars' => $calendar]);
    }
}
