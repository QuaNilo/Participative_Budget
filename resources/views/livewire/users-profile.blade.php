<section class="relative md:py-24">
    <div class="flex space-x-4 p-6">
        <div class="h-fit bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md">
            <div class="border-1 border-slate-200 flex p-4 mb-2 bg-slate-100">
                <div class="flex items-center">
{{--                    <img src="https://i.pravatar.cc/300" class="h-16 w-16 rounded-full shadow dark:shadow-gray-800" alt="">--}}
                    <div class="ms-2">
{{--                        <h5 class="text-lg font-semibold"><span class="font-semibold text-slate-400">Hello, </span>{{auth()->user()->name}}</h5>--}}
                            <div>
                                <h5 class="text-xl font-bold">{{__('Hello')}}, {{auth()->user()->name}}</h5>
                                <h6 class="text-slate-400 font-semibold">{{__('Welcome')}}!</h6>
                            </div>
                        <button class="inline-flex items-center mt-2 px-3 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-primary-hover focus:bg-gray-700 transition ease-in-out duration-150" wire:click="logout">
                            {{__('Logout')}}</button>
                    </div>
                </div>
            </div><!--end col-->

            <div class="flex h-full w-full">
                <div class="top-20 p-4 border-1 border-slate-200 max-h-64">
                    <ul class="flex-column" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                        <li role="presentation">
                            <x-profile-dashboard-tab :class="$tab === 'dashboard' ? 'bg-primary text-white hover:text-white' : ''" wire:click="setActiveTab('dashboard')"><i class="uil uil-dashboard text-[20px] me-2 align-middle"></i>{{__('Dashboard')}}</x-profile-dashboard-tab>
                        </li>
                        <li role="presentation">
                            <x-profile-dashboard-tab :class="$tab === 'proposals' ? 'bg-primary text-white hover:text-white' : ''" wire:click="setActiveTab('proposals')"><i class="uil uil-list-ul text-[20px] me-2 align-middle"></i>{{__('Proposals')}}</x-profile-dashboard-tab>
                        </li>
                        <li role="presentation">
                            <x-profile-dashboard-tab :class="$tab === 'votos' ? 'bg-primary text-white hover:text-white' : ''" wire:click="setActiveTab('votos')"><i class="uil uil-heart text-[20px] me-2 align-middle"></i>{{__('Votes')}}</x-profile-dashboard-tab>
                        </li>
                        <li role="presentation">
                            <x-profile-dashboard-tab :class="$tab === 'details' ? 'bg-primary text-white hover:text-white' : ''" wire:click="setActiveTab('details')"><i class="uil uil-user text-[20px] me-2 align-middle"></i>{{__('Account Details')}}</x-profile-dashboard-tab>
                        </li>
                        <li role="presentation">
                            <x-profile-dashboard-tab :class="$tab === 'update-password' ? 'bg-primary text-white hover:text-white' : ''" wire:click="setActiveTab('update-password')"><i class="uil uil-padlock text-[20px] me-2 align-middle"></i>{{__('Update Password')}}</x-profile-dashboard-tab>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex-grow flex-col">
            <div class="">
                @if($tab === 'dashboard')
                    @if($hasProposals && $hasVotes)
                        <livewire:dashboard-profile/>
                    @else
                        <x-frontend.no-data  :message="__('No Data Found')" />
                    @endif
                @elseif($tab === 'proposals')
                    @if($hasProposals)
                        <livewire:proposals-profile-component/>
                    @else
                        <x-frontend.no-data  :message="__('No Proposals Found')" />
                    @endif
                @elseif($tab === 'votos')
                    @if($hasVotes)
                        <livewire:votos-profile-component/>
                    @else
                        <x-frontend.no-data  :message="__('No Votes Found')" />
                    @endif
                @elseif($tab === 'details')
                    <livewire:profile-details/>
                @elseif($tab === 'update-password')
                    <x-frontend.profile.update-password-component/>
                @endif
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
