<?php
    $setting = \App\Models\Setting::first();
?>
<div class="">
    @if($setting->require_cc_vote_create == 1)
        <div class="flex flex-row shadow-md rounded-md w-fit h-10 items-center p-3 mb-4 bg-white"/>
            <span class="text-lg font-semibold mr-6 text-primary">{{__('Account Status')}}</span>
        @if(auth()->user()->citizen->CC_verified == \App\Models\Citizen::APPROVAL_STATUS_ACCEPTED)
            <span class="text-slate-400 font-semibold mr-6">{{__('Citizen Card Verified')}} </span>
        @else
            <span class="text-red-400 font-semibold mr-6">{{__('Citizen Card Unverified')}} </span>
        @endif
    @endif
</div>
