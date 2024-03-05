<section class="relative md:py-24 py-16">
    <div class="container flex space-x-6">
        <div class="bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md">
            <div class="border-1 border-slate-200 flex p-4 mb-2 bg-indigo-100/40">
                <div class="flex items-center">
                    <img src="https://i.pravatar.cc/300" class="h-16 w-16 rounded-full shadow dark:shadow-gray-800" alt="">
                    <div class="ms-2">
                        <h5 class="text-lg font-semibold"><span class="font-semibold text-slate-400">Hello, </span>{{auth()->user()->name}}</h5>
                        <button class="inline-flex items-center mt-2 px-3 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-gray-700 transition ease-in-out duration-150" wire:click="logout">Logout</button>
                    </div>
                </div>
            </div><!--end col-->

            <div class="flex">
                <div class="sticky top-20 p-4 border-1 border-slate-200">
                    <ul class="flex-column " id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                        <li role="presentation">
                            <x-profile-dashboard-tab :class="$tab === 'dashboard' ? 'bg-gray-800 text-white hover:text-white' : ''" wire:click="setActiveTab('dashboard')"><i class="uil uil-dashboard text-[20px] me-2 align-middle"></i>{{__('Dashboard')}}</x-profile-dashboard-tab>
                        </li>
                        <li role="presentation">
                            <x-profile-dashboard-tab :class="$tab === 'proposals' ? 'bg-gray-800 text-white hover:text-white' : ''" wire:click="setActiveTab('proposals')"><i class="uil uil-list-ul text-[20px] me-2 align-middle"></i>{{__('Proposals')}}</x-profile-dashboard-tab>
                        </li>
                        <li role="presentation">
                            <x-profile-dashboard-tab :class="$tab === 'votos' ? 'bg-gray-800 text-white hover:text-white' : ''" wire:click="setActiveTab('votos')"><i class="uil uil-heart text-[20px] me-2 align-middle"></i>{{__('Votes')}}</x-profile-dashboard-tab>
                        </li>
                        <li role="presentation">
                            <x-profile-dashboard-tab :class="$tab === 'details' ? 'bg-gray-800 text-white hover:text-white' : ''" wire:click="setActiveTab('details')"><i class="uil uil-user text-[20px] me-2 align-middle"></i>{{__('Account Details')}}</x-profile-dashboard-tab>
                        </li>
                        <li role="presentation">
                            <x-profile-dashboard-tab :class="$tab === 'update-password' ? 'bg-gray-800 text-white hover:text-white' : ''" wire:click="setActiveTab('update-password')"><i class="uil uil-padlock text-[20px] me-2 align-middle"></i>{{__('Update Password')}}</x-profile-dashboard-tab>
                        </li>
                    </ul>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
        <div class="flex-grow flex-col">
            <div class="">
                @if($tab === 'dashboard')
                    <livewire:dashboard-profile/>
                @elseif($tab === 'proposals')
                    <livewire:proposals-profile-component/>
                @elseif($tab === 'votos')
                    <livewire:votos-profile-component/>
                @elseif($tab === 'details')
                    <livewire:profile-details/>
                @elseif($tab === 'update-password')
                    <x-frontend.profile.update-password-component/>
                @endif
            </div><!--end col-->

        </div>
    </div><!--end container-->
</section><!--end section-->
