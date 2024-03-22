<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <x-account-status/>
        <div class="grid xl:grid-cols-5 md:grid-cols-3 grid-cols-1 mt-6 gap-6">
            <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                <div class="p-5 flex items-center">
                    <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                        <i data-feather="heart" class="h-5 w-5"></i>
                    </span>

                    <span class="ms-3">
                        <span class="text-base text-slate-400 font-semibold block">{{__('Total Votes')}}</span>
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
                        <span class="text-base text-slate-400 font-semibold block">{{__('Votes on Top Proposals')}}</span>
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
                        <span class="text-base text-slate-400 font-semibold block">{{__('Average per Edition')}}</span>
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
                        <span class="text-base text-slate-400 font-semibold block">{{__('Total Impressions')}}</span>
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
                        <h6 class="text-lg font-semibold">{{__('Votes / Edition')}}</h6>
                    </div>
                    <div id="mainchart" class="apex-chart px-4 pb-6"></div>
                </div>
            </div>

            <div class="lg:col-span-3">
                <div class="overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <h6 class="text-lg font-semibold">{{__('Category most Participated in')}}</h6>
                    </div>
                    <div class="p-6 flex flex-col items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <div id="categoriesChart" class="apex-chart px-4 pb-6"></div>
                    </div>
                </div>
            </div>
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
