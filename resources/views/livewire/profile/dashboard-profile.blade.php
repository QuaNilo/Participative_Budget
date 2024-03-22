{{--<div class="relative overflow-x-auto  rounded-md p-2" id="dashboard" role="tabpanel" aria-labelledby="profile-tab">--}}
{{--    <div x-data="{ votesOpen: false, proposalsOpen: false, editionsOpen: false }" class="flex flex-row w-full">--}}
{{--        <div class="flex-col flex-grow shadow mr-5">--}}
{{--            <div class="bg-slate-100">--}}
{{--                <h1 class="bold text-3xl text-center mb-4">{{__('Statistics')}}</h1>--}}
{{--            </div>--}}
{{--            <h1 @click="votesOpen = !votesOpen" class="bold text-2xl text-center">{{__('Votes')}}</h1>--}}
{{--            <div :class="{ 'h-0 hidden': !votesOpen, 'h-auto': votesOpen }" class="shadow bg-gray-400/10 p-2 mb-4 transition-all duration-900">--}}
{{--                <div class="flex flex-row mb-4 space-x-5">--}}
{{--                    <livewire:statistics-card :value="$count_votes_winner_proposal" :title="'Votes on Winner Proposals'"/>--}}
{{--                    <livewire:statistics-card :value="$total_votes" :title="'Total Votes'"/>--}}
{{--                    <livewire:statistics-card :value="$averageVotesOnAllEditions" :title="'Average Votes On All Editions'"/>--}}
{{--                </div>--}}
{{--                <div class="flex flex-row">--}}
{{--                    <div class="w-1/2 h-1/2 flex-grow">--}}
{{--                        <p>Votes per Edition</p>--}}
{{--                        <canvas id="votesPerEdition"></canvas>--}}
{{--                    </div>--}}
{{--                    <div class="w-1/2 h-full">--}}
{{--                        <p>Most Voted Edition</p>--}}
{{--                        <canvas id="dummyChart"></canvas>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--            <h1 @click="proposalsOpen = !proposalsOpen" class="bold text-2xl text-center">{{__('Proposals')}}</h1>--}}
{{--            <div :class="{ 'h-0 hidden': !proposalsOpen, 'h-auto': proposalsOpen }" class="shadow bg-gray-400/10 p-2 mb-4 transition-all duration-900">--}}
{{--                <div class="flex flex-row mb-4 space-x-5">--}}
{{--                    <livewire:statistics-card :value="'112'" :title="'Proposals Created'"/>--}}
{{--                    <livewire:statistics-card :value="'Criação de um jardim'" :title="'Most Voted Proposal'"/>--}}
{{--                    <livewire:statistics-card :value="'10'" :title="'Winner Proposals Count'"/>--}}
{{--                </div>--}}
{{--                <div class="flex flex-row">--}}
{{--                    <div class="w-1/2 h-1/2">--}}
{{--                        <p>Most Voted Edition</p>--}}
{{--                        <canvas id="ProposalsRankedByVote"></canvas>--}}
{{--                    </div>--}}
{{--                    <div class="w-1/2 h-full">--}}
{{--                        <p>Most Proposals Per Edition</p>--}}
{{--                        <canvas id="MostProposalsPerEdition"></canvas>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div id="verified_status" class="shadow dark:shadow-gray-800 h-full">--}}
{{--            <div class="bg-slate-100">--}}
{{--                <h1 class="bold text-2xl mb-2 text-center">{{__('Account Status')}}</h1>--}}
{{--            </div>--}}
{{--            <div class="text-center p-2">--}}
{{--                @if($setting->require_cc_vote_create)--}}
{{--    --}}{{--                <p>Cartão cidadão : </p>--}}
{{--                    @if(auth()->user()->citizen->CC_verified)--}}
{{--                        <p class="inline-block shadow dark:shadow-gray-800 rounded-md py-2 px-3 m-0.5 bg-indigo-600/30"> {{__('Cartão Cidadão Verificado')}}</p>--}}
{{--                    @else--}}
{{--                        <p class="inline-block shadow dark:shadow-gray-800 rounded-md py-2 px-3 m-0.5 bg-red-600/30"> {{__('Cartão cidadão não verificado')}}</p>--}}
{{--                    @endif--}}
{{--                    <p> </p>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--            <div class="text-center p-2">--}}
{{--                @if($setting->require_address_vote_create)--}}
{{--    --}}{{--                <p>Cartão cidadão : </p>--}}
{{--                    @if(auth()->user()->citizen->CC_verified)--}}
{{--                        <p class="inline-block shadow dark:shadow-gray-800 rounded-md py-2 px-3 m-0.5 bg-indigo-600/30"> {{__('Morada Verificada')}}</p>--}}
{{--                    @else--}}
{{--                        <p class="inline-block shadow dark:shadow-gray-800 rounded-md py-2 px-3 m-0.5 bg-red-600/30"> {{__('Morada não verificada')}}</p>--}}
{{--                    @endif--}}
{{--                    <p> </p>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<?php--}}
{{--  echo "<script> var editionNames = '$editionNamesJson';</script>";--}}
{{--  echo "<script> var editionVotes = '$votesPerEditionJson';</script>";--}}
{{--?>--}}
{{--<script type="text/javascript">--}}
{{--      const votesPerEdition = document.getElementById('votesPerEdition');--}}

{{--      new Chart(votesPerEdition, {--}}
{{--        type: 'polarArea',--}}
{{--        data: {--}}
{{--          labels: JSON.parse(editionNames),--}}
{{--          datasets: [{--}}
{{--            label: '# of Votes',--}}
{{--            data: JSON.parse(editionVotes),--}}
{{--            borderWidth: 2--}}
{{--          }]--}}
{{--        },--}}
{{--        options: {--}}
{{--          scales: {--}}
{{--            y: {--}}
{{--              beginAtZero: true--}}
{{--            }--}}
{{--          }--}}
{{--        }--}}
{{--      });--}}

{{--      const dummyChart = document.getElementById('dummyChart');--}}

{{--      new Chart(dummyChart, {--}}
{{--        type: 'bar',--}}
{{--        data: {--}}
{{--          labels: JSON.parse(editionNames),--}}
{{--          datasets: [{--}}
{{--            label: '# of Votes',--}}
{{--            data: JSON.parse(editionVotes),--}}
{{--            borderWidth: 2--}}
{{--          }]--}}
{{--        },--}}
{{--        options: {--}}
{{--          scales: {--}}
{{--            y: {--}}
{{--              beginAtZero: true--}}
{{--            }--}}
{{--          }--}}
{{--        }--}}
{{--      });--}}

{{--      const ProposalsRankedByVote = document.getElementById('ProposalsRankedByVote');--}}

{{--      new Chart(ProposalsRankedByVote, {--}}
{{--        type: 'polarArea',--}}
{{--        data: {--}}
{{--          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],--}}
{{--          datasets: [{--}}
{{--            label: '# of Votes',--}}
{{--            data: [12, 19, 3, 5, 2, 3],--}}
{{--            borderWidth: 2--}}
{{--          }]--}}
{{--        },--}}
{{--        options: {--}}
{{--          scales: {--}}
{{--            y: {--}}
{{--              beginAtZero: true--}}
{{--            }--}}
{{--          }--}}
{{--        }--}}
{{--      });--}}


{{--        const MostProposalsPerEdition = document.getElementById('MostProposalsPerEdition');--}}

{{--      new Chart(MostProposalsPerEdition, {--}}
{{--        type: 'bar',--}}
{{--        data: {--}}
{{--          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],--}}
{{--          datasets: [{--}}
{{--            label: '# of Votes',--}}
{{--            data: [12, 19, 3, 5, 2, 3],--}}
{{--            borderWidth: 2--}}
{{--          }]--}}
{{--        },--}}
{{--        options: {--}}
{{--          scales: {--}}
{{--            y: {--}}
{{--              beginAtZero: true--}}
{{--            }--}}
{{--          }--}}
{{--        }--}}
{{--      });--}}
{{--</script>--}}



<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <div class="flex flex-row rounded-md shadow w-fit h-10 bg-gray-50 items-center p-3">
            <span class="text-lg font-semibold mr-6 text-indigo-600">Account Status</span>

            <span class="text-slate-400 font-semibold mr-6">Citizen Card Verified </span>
            <span class="text-slate-400 font-semibold">Address Verified</span>
        </div>
        <div class="grid xl:grid-cols-5 md:grid-cols-3 grid-cols-1 mt-6 gap-6">
            <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                <div class="p-5 flex items-center">
                    <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                        <i data-feather="heart" class="h-5 w-5"></i>
                    </span>

                    <span class="ms-3">
                        <span class="text-base text-slate-400 font-semibold block">Total Votes</span>
                        <span class="flex items-center justify-between mt-1">
                            <span class="text-xl font-semibold"><span class="counter-value" data-target="{{$total_votes}}">{{$total_votes}}</span></span>
                            <span class="text-red-600 text-sm ms-1 font-semibold"><i class="uil uil-chart-down"></i> 0.5%</span>
                        </span>
                    </span>
                </div>
            </div><!--end-->

            <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                <div class="p-5 flex items-center">
                    <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                        <i data-feather="star" class="h-5 w-5"></i>
                    </span>

                    <span class="ms-3">
                        <span class="text-base text-slate-400 font-semibold block">Votes on Top Proposals</span>
                        <span class="flex items-center justify-between mt-1">
                            <span class="text-xl font-semibold"><span class="counter-value" data-target="{{$count_votes_winner_proposal}}">{{$count_votes_winner_proposal}}</span></span>
                            <span class="text-emerald-600 text-sm ms-1 font-semibold"><i class="uil uil-arrow-growth"></i> 3.84%</span>
                        </span>
                    </span>
                </div>
            </div><!--end-->

            <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                <div class="p-5 flex items-center">
                    <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                        <i data-feather="bookmark" class="h-5 w-5"></i>
                    </span>

                    <span class="ms-3">
                        <span class="text-base text-slate-400 font-semibold block">Average per Edition</span>
                        <span class="flex items-center justify-between mt-1">
                            <span class="text-xl font-semibold"><span class="counter-value" data-target="{{$averageVotesOnAllEditions}}">{{$averageVotesOnAllEditions}}</span></span>
                            <span class="text-emerald-600 text-sm ms-1 font-semibold"><i class="uil uil-arrow-growth"></i> 1.46%</span>
                        </span>
                    </span>
                </div>
            </div><!--end-->

            <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                <div class="p-5 flex items-center">
                    <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                        <i data-feather="shopping-bag" class="h-5 w-5"></i>
                    </span>

                    <span class="ms-3">
                        <span class="text-base text-slate-400 font-semibold block">Total Impressions</span>
                        <span class="flex items-center justify-between mt-1">
                            <span class="text-xl font-semibold"><span class="counter-value" data-target="145">23</span></span>
                            <span class="text-slate-400 text-sm ms-1 font-semibold"><i class="uil uil-analysis"></i> 0.0%</span>
                        </span>
                    </span>
                </div>
            </div><!--end-->

            <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                <div class="p-5 flex items-center">
                    <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                        <i data-feather="dollar-sign" class="h-5 w-5"></i>
                    </span>

                    <span class="ms-3">
                        <span class="text-base text-slate-400 font-semibold block">Filler 3</span>
                        <span class="flex items-center justify-between mt-1">
                            <span class="text-xl font-semibold">$<span class="counter-value" data-target="24351">22135</span></span>
                            <span class="text-emerald-600 text-sm ms-1 font-semibold"><i class="uil uil-arrow-growth"></i> 1.6%</span>
                        </span>
                    </span>
                </div>
            </div><!--end-->
        </div>

        <div class="grid lg:grid-cols-10 grid-cols-1 mt-6 gap-4">
            <div class="lg:col-span-7">
                <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <h6 class="text-lg font-semibold">Votes / Edition</h6>
                    </div>
                    <div id="mainchart" class="apex-chart px-4 pb-6"></div>
                </div>
            </div>

            <div class="lg:col-span-3">
                <div class="overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <h6 class="text-lg font-semibold">Category most Participated in</h6>
                    </div>
                    <div class="p-6 flex flex-col items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <div id="categoriesChart" class="apex-chart px-4 pb-6"></div>
                    </div>
                </div>
            </div>
{{--        <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">--}}
{{--            <div class="xl:col-span-5 lg:col-span-12">--}}
{{--                <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">--}}
{{--                    <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">--}}
{{--                        <h6 class="text-lg font-semibold">Orders</h6>--}}

{{--                        <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-slate-400 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white after:bg-indigo-600 dark:after:bg-white duration-500">View orders <i class="uil uil-arrow-right"></i></a>--}}
{{--                    </div>--}}

{{--                    <div class="relative overflow-x-auto block w-full max-h-[400px]" data-simplebar>--}}
{{--                        <table class="w-full text-start">--}}
{{--                            <thead class="text-base">--}}
{{--                                <tr>--}}
{{--                                    <th class="text-start font-semibold text-[15px] p-4 min-w-[100px]">No.</th>--}}
{{--                                    <th class="text-start font-semibold text-[15px] p-4 min-w-[128px]">ID</th>--}}
{{--                                    <th class="text-start font-semibold text-[15px] p-4 min-w-[128px]">Date</th>--}}
{{--                                    <th class="text-start font-semibold text-[15px] p-4 min-w-[128px]">Price</th>--}}
{{--                                    <th class="text-end font-semibold text-[15px] p-4 min-w-[128px]">Status</th>--}}
{{--                                </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                                <tr>--}}
{{--                                    <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4 font-semibold">01</th>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">#tw001</td>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-slate-400">10th Aug 2023</span>--}}
{{--                                    </td>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-slate-400">$253</span>--}}
{{--                                    </td>--}}
{{--                                    <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="bg-emerald-600/10 dark:bg-emerald-600/20 border border-emerald-600/10 dark:border-emerald-600/20 text-emerald-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Delivered</span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}

{{--                                <tr>--}}
{{--                                    <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4 font-semibold">02</th>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">#tw002</td>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-slate-400">13th Aug 2023</span>--}}
{{--                                    </td>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-slate-400">$123</span>--}}
{{--                                    </td>--}}
{{--                                    <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="bg-indigo-600/10 dark:bg-indigo-600/20 border border-indigo-600/10 dark:border-indigo-600/20 text-indigo-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New Order</span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}

{{--                                <tr>--}}
{{--                                    <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4 font-semibold">03</th>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">#tw003</td>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-slate-400">18th Aug 2023</span>--}}
{{--                                    </td>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-slate-400">$245</span>--}}
{{--                                    </td>--}}
{{--                                    <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="bg-red-600/10 dark:bg-red-600/20 border border-red-600/10 dark:border-red-600/20 text-red-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Return</span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}

{{--                                <tr>--}}
{{--                                    <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4 font-semibold">04</th>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">#tw004</td>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-slate-400">21st Aug 2023</span>--}}
{{--                                    </td>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-slate-400">$157</span>--}}
{{--                                    </td>--}}
{{--                                    <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="bg-gray-500/5 border border-gray-500/5 text-gray-500 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Cancel</span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}

{{--                                <tr>--}}
{{--                                    <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4 font-semibold">05</th>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">#tw005</td>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-slate-400">22nd Aug 2023</span>--}}
{{--                                    </td>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-slate-400">$62</span>--}}
{{--                                    </td>--}}
{{--                                    <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="bg-indigo-600/10 dark:bg-indigo-600/20 border border-indigo-600/10 dark:border-indigo-600/20 text-indigo-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New Order</span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}

{{--                                <tr>--}}
{{--                                    <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4 font-semibold">06</th>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">#tw006</td>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-slate-400">23rd Aug 2023</span>--}}
{{--                                    </td>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-slate-400">$456</span>--}}
{{--                                    </td>--}}
{{--                                    <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="bg-emerald-600/10 dark:bg-emerald-600/20 border border-emerald-600/10 dark:border-emerald-600/20 text-emerald-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Delivered</span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}

{{--                                <tr>--}}
{{--                                    <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4 font-semibold">07</th>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">#tw007</td>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-slate-400">24th Aug 2023</span>--}}
{{--                                    </td>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-slate-400">$478</span>--}}
{{--                                    </td>--}}
{{--                                    <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="bg-emerald-600/10 dark:bg-emerald-600/20 border border-emerald-600/10 dark:border-emerald-600/20 text-emerald-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Delivered</span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--            </div>--}}
{{--            <div class="xl:col-span-3 lg:col-span-6">--}}
{{--                <div class="rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">--}}
{{--                    <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">--}}
{{--                        <h6 class="text-lg font-semibold">Top Products / Items</h6>--}}

{{--                        <a href="" class="text-slate-400 hover:text-indigo-600 dark:text-white/70 dark:hover:text-white text-[20px]"><i class="mdi mdi-swap-vertical"></i></a>--}}
{{--                    </div>--}}

{{--                    <div class="relative overflow-x-auto block w-full max-h-[400px]" data-simplebar>--}}
{{--                        <table class="w-full text-start">--}}
{{--                            <thead class="text-base">--}}
{{--                                <tr>--}}
{{--                                    <th class="text-start font-semibold text-[15px] p-4 min-w-[150px]">Products</th>--}}
{{--                                    <th class="text-start font-semibold text-[15px] p-4 min-w-[100px]">Earnings</th>--}}
{{--                                    <th class="text-end font-semibold text-[15px] p-4 min-w-[80px]">Progress</th>--}}
{{--                                </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                                <tr>--}}
{{--                                    <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4 font-semibold">Techwind</th>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">$4120</td>--}}
{{--                                    <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-emerald-600 text-sm ms-1 font-semibold"><i class="uil uil-arrow-growth"></i> 5.5%</span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}

{{--                                <tr>--}}
{{--                                    <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4 font-semibold">Landrick</th>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">$5648</td>--}}
{{--                                    <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-red-600 text-sm ms-1 font-semibold"><i class="uil uil-chart-down"></i> 15.8%</span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}

{{--                                <tr>--}}
{{--                                    <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4 font-semibold">Hously</th>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">$456</td>--}}
{{--                                    <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-emerald-600 text-sm ms-1 font-semibold"><i class="uil uil-arrow-growth"></i> 1.3%</span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}

{{--                                <tr>--}}
{{--                                    <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4 font-semibold">Jobstack</th>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">$546</td>--}}
{{--                                    <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-red-600 text-sm ms-1 font-semibold"><i class="uil uil-chart-down"></i> 1.54%</span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}

{{--                                <tr>--}}
{{--                                    <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4 font-semibold">Giglink</th>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">$124</td>--}}
{{--                                    <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-red-600 text-sm ms-1 font-semibold"><i class="uil uil-chart-down"></i> 8.5%</span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}

{{--                                <tr>--}}
{{--                                    <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4 font-semibold">Upwind</th>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">$1545</td>--}}
{{--                                    <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-emerald-600 text-sm ms-1 font-semibold"><i class="uil uil-arrow-growth"></i> 6.4%</span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}

{{--                                <tr>--}}
{{--                                    <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4 font-semibold">Fronter</th>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">$1215</td>--}}
{{--                                    <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-red-600 text-sm ms-1 font-semibold"><i class="uil uil-chart-down"></i> 4.8%</span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}

{{--                                <tr>--}}
{{--                                    <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4 font-semibold">Doctris</th>--}}
{{--                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">$2321</td>--}}
{{--                                    <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">--}}
{{--                                        <span class="text-emerald-600 text-sm ms-1 font-semibold"><i class="uil uil-arrow-growth"></i> 4.1%</span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
<?php
//PASS THE VARIABLES TO THE CHARTS
    echo "<script> var editionNames = '$editionNamesJson';</script>";
    echo "<script> var editionVotes = '$votesPerEditionJson';</script>";
    echo "<script> var categoryNames = '$categoryNamesJson';</script>";
    echo "<script> var categoryVotes = '$votesPerCategoryJson';</script>";
?>
