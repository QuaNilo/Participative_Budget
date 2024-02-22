<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CitizenPending extends Controller
{
    public function reject(Request $request, $id)
    {
        $citizen = Citizen::find($id);
        if($citizen)
        {
            $citizen->update(['pending_approval' => 2]);
            flash(__('Updated Citizen Sucessfuly'))->overlay()->success()->duration(4000);
            return Redirect::back();
        }

        flash(__('Failed Updating Citizen'))->overlay()->danger()->duration(4000);
        return Redirect::back();
    }

    public function approve(Request $request, $id)
    {
        $citizen = Citizen::find($id);
        if($citizen)
        {
            $citizen->update(['pending_approval' => 0]);
            flash(__('Updated Citizen Sucessfuly'))->overlay()->success()->duration(4000);
            return Redirect::back();
        }

        flash(__('Failed Updating Citizen'))->overlay()->danger()->duration(4000);
        return Redirect::back();
    }
}
