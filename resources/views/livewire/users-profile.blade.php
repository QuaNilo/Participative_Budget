<section class="relative md:py-24 py-16">
    <div class="container">
{{--        @dd($proposals)--}}
        <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-3 md:col-span-5">
                <div class="flex items-center">
                    <img src="https://i.pravatar.cc/300" class="h-16 w-16 rounded-full shadow dark:shadow-gray-800" alt="">
                    <div class="ms-2">
                        <p class="font-semibold text-slate-400">Hello,</p>
                        <h5 class="text-lg font-semibold">{{auth()->user()->name}}</h5>
                    </div>
                </div>
            </div><!--end col-->

            <div class="lg:col-span-9 md:col-span-7">
                <p class="text-slate-400 max-w-xl">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
            </div><!--end col-->

            <div class="lg:col-span-3 md:col-span-5">
                <div class="sticky top-20">
                    <ul class="flex-column p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                        <li role="presentation">
                            <x-profile-dashboard-tab :class="$tab === 'dashboard' ? 'bg-indigo-600 text-white' : ''" wire:click="setActiveTab('dashboard')"><i class="uil uil-dashboard text-[20px] me-2 align-middle"></i>Dashboard</x-profile-dashboard-tab>
                        </li>
                        <li role="presentation">
                            <x-profile-dashboard-tab :class="$tab === 'proposals' ? 'bg-indigo-600 text-white' : ''" wire:click="setActiveTab('proposals')"><i class="uil uil-list-ul text-[20px] me-2 align-middle"></i>Proposals</x-profile-dashboard-tab>
                        </li>
                        <li role="presentation">
                            <x-profile-dashboard-tab :class="$tab === 'votos' ? 'bg-indigo-600 text-white' : ''" wire:click="setActiveTab('votos')"><i class="uil uil-heart text-[20px] me-2 align-middle"></i>Votos</x-profile-dashboard-tab>
                        </li>
                        <li role="presentation">
                            <x-profile-dashboard-tab :class="$tab === 'details' ? 'bg-indigo-600 text-white' : ''" wire:click="setActiveTab('details')"><i class="uil uil-user text-[20px] me-2 align-middle"></i>Account Details</x-profile-dashboard-tab>
                        </li>
                        <li role="presentation">
                            <x-profile-dashboard-tab :class="$tab === 'update-password' ? 'bg-indigo-600 text-white' : ''" wire:click="setActiveTab('update-password')"><i class="uil uil-padlock text-[20px] me-2 align-middle"></i>Update Password</x-profile-dashboard-tab>
                        </li>
                    </ul>
                </div>
            </div><!--end col-->
            <div class="lg:col-span-9 md:col-span-7">
                @if($tab === 'dashboard')
                    <x-frontend.profile.dashboard-component/>
                @elseif($tab === 'proposals')
                    <livewire:proposals-profile-component/>
                @elseif($tab === 'votos')
                    <livewire:votos-profile-component/>
                @elseif($tab === 'details')
                    <x-frontend.profile.details-component/>

                @elseif($tab === 'update-password')
                    <x-frontend.profile.update-password-component/>
                @endif
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
