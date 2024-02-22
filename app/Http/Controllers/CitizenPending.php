<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CitizenPending extends Controller
{
    public function reject_cc(Request $request, $id)
    {
        $citizen = Citizen::find($id);
        if($citizen)
        {
            $citizen->update(['CC_verified' => 0, 'CC_verified_at' => null]);
            flash(__('Updated Citizen Successfully'))->overlay()->success()->duration(4000);
            return Redirect::back();
        }

        flash(__('Failed Updating Citizen'))->overlay()->danger()->duration(4000);
        return Redirect::back();
    }

    public function approve_cc(Request $request, $id)
    {
        $citizen = Citizen::find($id);
        if($citizen)
        {
            $citizen->update(['CC_verified' => 1, 'CC_verified_at' => now()]);
            flash(__('Updated Citizen Successfully'))->overlay()->success()->duration(4000);
            return Redirect::back();
        }

        flash(__('Failed Updating Citizen'))->overlay()->danger()->duration(4000);
        return Redirect::back();
    }


    public function reject_address(Request $request, $id)
    {
        $citizen = Citizen::find($id);
        if($citizen)
        {
            $citizen->update(['address_verified' => 0, 'address_verified_at' => null]);
            flash(__('Updated Citizen Successfully'))->overlay()->success()->duration(4000);
            return Redirect::back();
        }

        flash(__('Failed Updating Citizen'))->overlay()->danger()->duration(4000);
        return Redirect::back();
    }

    public function approve_address(Request $request, $id)
    {
        $citizen = Citizen::find($id);
        if($citizen)
        {
            $citizen->update(['address_verified' => 1, 'address_verified_at' => now()]);
            flash(__('Updated Citizen Successfully'))->overlay()->success()->duration(4000);
            return Redirect::back();
        }

        flash(__('Failed Updating Citizen'))->overlay()->danger()->duration(4000);
        return Redirect::back();
    }
}
