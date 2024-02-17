<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Helper extends Controller
{
    public function display_warning()
    {
        flash(__('Exceeded maximum proposals for this edition'))->overlay()->warning()->duration(4000);
        return Redirect::back();
    }


    public function display_warning_cc()
    {
        flash(__('Your Citizen Card needs to be validated to create Proposals'))->overlay()->warning()->duration(4000);
        return Redirect::back();
    }

    public function display_warning_address()
    {
        flash(__('Your Address needs to be validated to create Proposals'))->overlay()->warning()->duration(4000);
        return Redirect::back();
    }
}
