<div class="relative overflow-x-auto shadow dark:shadow-gray-800 rounded-md p-2" id="dashboard" role="tabpanel" aria-labelledby="profile-tab">
    <div class="flex flex-row justify-evenly">
        <div>
            @if($setting->require_cc_vote_create)
{{--                <p>Cartão cidadão : </p>--}}
                @if(auth()->user()->citizen->CC_verified)
                    <p class="inline-block shadow dark:shadow-gray-800 rounded-md py-2 px-3 m-0.5 bg-indigo-600/30"> {{__('Cartão Cidadão Verificado')}}</p>
                @else
                    <p class="inline-block shadow dark:shadow-gray-800 rounded-md py-2 px-3 m-0.5 bg-red-600/30"> {{__('Cartão cidadão não verificado')}}</p>
                @endif
                <p> </p>
            @endif
        </div>
        <div>
            @if($setting->require_address_vote_create)
{{--                <p>Cartão cidadão : </p>--}}
                @if(auth()->user()->citizen->CC_verified)
                    <p class="inline-block shadow dark:shadow-gray-800 rounded-md py-2 px-3 m-0.5 bg-indigo-600/30"> {{__('Morada Verificada')}}</p>
                @else
                    <p class="inline-block shadow dark:shadow-gray-800 rounded-md py-2 px-3 m-0.5 bg-red-600/30"> {{__('Morada não verificada')}}</p>
                @endif
                <p> </p>
            @endif
        </div>
    </div>
    <div>
        <p>TODO</p>
    </div>
</div>
