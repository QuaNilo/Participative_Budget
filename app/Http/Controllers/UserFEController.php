<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFEController extends Controller
{
    public function index()
    {
        return view('site.profile.index');
    }
}
