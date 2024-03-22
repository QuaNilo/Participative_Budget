<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <x-account-status/>
        <ul class="text-sm font-medium text-center text-gray-500 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400 mt-10">
            <li class="w-full focus-within:z-10">
                <a wire:click="toggleTab('votes')" class="transition-all ease-in-out inline-block w-full p-4 @if($selectedTab == 'votes') text-white bg-indigo-600 @else text-slate-400 bg-gray-50 @endif  border-r active:bg-indigo-800 border-gray-200 rounded-s-lg focus:ring-4 focus:ring-indigo-300 focus:outline-none" aria-current="page">Votes</a>
            </li>
            <li class="w-full focus-within:z-10">
                <a wire:click="toggleTab('proposals')" class="transition-all ease-in-out inline-block w-full p-4  @if($selectedTab == 'proposals') text-white bg-indigo-600 @else text-slate-400 bg-gray-50 @endif border-r active:bg-indigo-800 focus:ring-4 focus:ring-indigo-300 focus:outline-none ">Proposals</a>
            </li>
        </ul>
        @if($selectedTab == 'votes')
            <div class="grid xl:grid-cols-5 md:grid-cols-3 grid-cols-1 mt-6 gap-6">
                <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-5 flex items-center">
                        <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                            <i data-feather="heart" class="h-5 w-5"></i>
                        </span>

                        <span class="ms-3">
                            <span class="text-sm text-slate-400 font-semibold block">{{__('Total Votes')}}</span>
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
                            <span class="text-sm text-slate-400 font-semibold block">{{__('Votes on Top Proposals')}}</span>
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
                            <span class="text-sm text-slate-400 font-semibold block">{{__('Average Votes per Edition')}}</span>
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
                            <span class="text-sm text-slate-400 font-semibold block">{{__('Total Impressions on my Proposals')}}</span>
                            <span class="flex items-center justify-between mt-1">
                                <span class="text-xl font-semibold"><span class="counter-value" data-target="{{$total_impressions}}">{{$total_impressions}}</span></span>
                                <span class="text-slate-400 text-sm ms-1 font-semibold"><i class="uil uil-analysis"></i> 0.0%</span>
                            </span>
                        </span>
                    </div>
                </div><!--end-->
            </div>

            <div class="grid lg:grid-cols-10 grid-cols-1 mt-6 gap-4">
                <div class="lg:col-span-7">
                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                            <h6 class="text-lg font-semibold">{{__('Votes / Edition')}}</h6>
                        </div>
                        <div id="mainchart" class="apex-chart px-4 pb-6">

                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3">
                    <div class="overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                            <h6 class="text-lg font-semibold">{{__('Category most Participated in')}}</h6>
                        </div>
                        <div class="p-6 flex flex-col items-center justify-between border-b border-gray-100 dark:border-gray-800">
                            <div id="categoriesChart" class="apex-chart px-4 pb-6">

                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        @else

        @endif
<?php
//PASS THE VARIABLES TO THE CHARTS
    echo "<script> var editionNames = '$editionNamesJson';</script>";
    echo "<script> var editionVotes = '$votesPerEditionJson';</script>";
    echo "<script> var categoryNames = '$categoryNamesJson';</script>";
    echo "<script> var categoryVotes = '$votesPerCategoryJson';</script>";
?>

{{--@script--}}
{{--<script>--}}
{{--    statistics();--}}
{{--</script>--}}
{{--@endscript--}}
