<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        $setting = Setting::first();
        return view("site.contact.index", ['setting' => $setting]);
    }
}
