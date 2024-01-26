<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQ extends Controller
{
    public function show()
    {
        return view('site.faq.index');
    }
}
