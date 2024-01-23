<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditionsFE extends Controller
{
    public function index()
    {
        return view('site.edition.index');
    }
}
