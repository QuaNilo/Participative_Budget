<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Helper extends Controller
{
    public function display_warning($message)
    {
        flash($message)->overlay()->warning()->duration(4000);
        return Redirect::back();
    }
}
