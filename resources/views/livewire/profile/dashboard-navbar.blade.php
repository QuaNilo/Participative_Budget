<div class="h-fit bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md">
    <div class="border-1 border-slate-200 flex p-4 mb-2 bg-slate-100">
        <div class="flex items-center">
            <div class="ms-2">
                <div>
                    <h5 class="text-xl font-bold">{{__('Hello')}}, {{auth()->user()->name}}</h5>
                    <h6 class="text-slate-400 font-semibold">{{__('Welcome')}}!</h6>
                </div>
                <button class="inline-flex items-center mt-2 px-3 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-gray-700 transition ease-in-out duration-150" wire:click="logout">
                    {{__('Logout')}}
                </button>
            </div>
        </div>
    </div><!--end col-->

    <div class="flex h-full w-full">
        <div class="top-20 p-4 border-1 border-slate-200 max-h-64">
            <ul class="flex-column" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li role="presentation">
                    <a href="{{route('users_dashboard_show_dashboard')}}">
                        <x-profile-dashboard-tab :class="$tab === 'dashboard' ? 'bg-indigo-600 text-white hover:text-white' : ''"><i class="uil uil-dashboard text-[20px] me-2 align-middle"></i>{{__('Dashboard')}}</x-profile-dashboard-tab>
                    </a>
                </li>
                <li role="presentation">
                    <a href="{{route('users_dashboard_show_proposals')}}">
                        <x-profile-dashboard-tab :class="$tab === 'proposals' ? 'bg-indigo-600 text-white hover:text-white' : ''" ><i class="uil uil-list-ul text-[20px] me-2 align-middle"></i>{{__('Proposals')}}</x-profile-dashboard-tab>
                    </a>
                </li>

                <li role="presentation">
                    <a href="{{route('users_dashboard_show_votes')}}">
                        <x-profile-dashboard-tab :class="$tab === 'votes' ? 'bg-indigo-600 text-white hover:text-white' : ''" ><i class="uil uil-heart text-[20px] me-2 align-middle"></i>{{__('Votes')}}</x-profile-dashboard-tab>
                    </a>
                </li>
                <li role="presentation">
                    <a href="{{route('users_dashboard_show_details')}}">
                        <x-profile-dashboard-tab :class="$tab === 'details' ? 'bg-indigo-600 text-white hover:text-white' : ''"><i class="uil uil-user text-[20px] me-2 align-middle"></i>{{__('Account Details')}}</x-profile-dashboard-tab>
                    </a>
                </li>
                <li role="presentation">
                    <a href="{{route('users_dashboard_show_password')}}">
                        <x-profile-dashboard-tab :class="$tab === 'password' ? 'bg-indigo-600 text-white hover:text-white' : ''"><i class="uil uil-padlock text-[20px] me-2 align-middle"></i>{{__('Update Password')}}</x-profile-dashboard-tab>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
