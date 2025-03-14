<div class="h-fit shadow dark:shadow-gray-800 rounded-md bg-white p-5">
    <x-account-status/>
    <div class="flex justify-around align-middle space-x-4">
        <div class="  overflow-hidden shadow-md rounded-md dark:shadow-gray-700 bg-white dark:bg-slate-900">
            <div class="p-5 flex items-center">
                <span class="flex justify-center items-center rounded-md h-14 w-14 bg-primary/5 dark:bg-primary/10 shadow shadow-primary/5 dark:shadow-primary/10 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart h-5 w-5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                </span>

                <span class="ms-3">
                    <span class="text-sm text-slate-400 font-semibold block">{{__('Total Votes')}}</span>
                    <span class="flex items-center justify-between mt-1">
                        <span class="text-xl font-semibold"><span class="counter-value" data-target="{{$total_votes}}">{{$total_votes}}</span></span>
                    </span>
                </span>
            </div>
        </div><!--end-->

        <div class="  overflow-hidden shadow-md rounded-md dark:shadow-gray-700 bg-white dark:bg-slate-900">
            <div class="p-5 flex items-center">
                <span class="flex justify-center items-center rounded-md h-14 w-14 bg-primary/5 dark:bg-primary/10 shadow shadow-primary/5 dark:shadow-primary/10 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star h-5 w-5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>                        </span>
                <span class="ms-3">
                    <span class="text-sm text-slate-400 font-semibold block">{{__('Votes on Top Proposals')}}</span>
                    <span class="flex items-center justify-between mt-1">
                        <span class="text-xl font-semibold"><span class="counter-value" data-target="{{$count_votes_winner_proposal}}">{{$count_votes_winner_proposal}}</span></span>
                    </span>
                </span>
            </div>
        </div><!--end-->

        <div class=" overflow-hidden shadow-md rounded-md dark:shadow-gray-700 bg-white dark:bg-slate-900">
            <div class="p-5 flex items-center">
                <span class="flex justify-center items-center rounded-md h-14 w-14 bg-primary/5 dark:bg-primary/10 shadow shadow-primary/5 dark:shadow-primary/10 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-slash-minus" viewBox="0 0 16 16">
                      <path d="m1.854 14.854 13-13a.5.5 0 0 0-.708-.708l-13 13a.5.5 0 0 0 .708.708M4 1a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 4 1m5 11a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5A.5.5 0 0 1 9 12"/>
                    </svg>
                </span>

                <span class="ms-3">
                    <span class="text-sm text-slate-400 font-semibold block">{{__('Average Votes per Edition')}}</span>
                    <span class="flex items-center justify-between mt-1">
                        <span class="text-xl font-semibold"><span class="counter-value" data-target="{{$averageVotesOnAllEditions}}">{{$averageVotesOnAllEditions}}</span></span>
                    </span>
                </span>
            </div>
        </div><!--end-->

        @if($user->proposals)
            <div class=" overflow-hidden shadow-md rounded-md dark:shadow-gray-700 bg-white dark:bg-slate-900">
                <div class="p-5 flex items-center">
                    <span class="flex justify-center items-center rounded-md h-14 w-14 bg-primary/5 dark:bg-primary/10 shadow shadow-primary/5 dark:shadow-primary/10 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                          <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                          <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                        </svg>
                    </span>
                    <span class="ms-3">
                        <span class="text-sm text-slate-400 font-semibold block">{{__('Total Impressions on my Proposals')}}</span>
                        <span class="flex items-center justify-between mt-1">
                            <span class="text-xl font-semibold"><span class="counter-value" data-target="{{$total_impressions}}">{{$total_impressions}}</span></span>
                        </span>
                    </span>
                </div>
            </div><!--end-->
        @endif
    </div>

    <div class="h-fit grid lg:grid-cols-10 grid-cols-4 grid-rows-1 mt-6 gap-4 ">
        <div class="lg:col-span-6 p-5 shadow-lg rounded-md bg-white">
            <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                <h6 class="text-lg font-semibold">{{__('Votes Per Edition')}}</h6>
            </div>
            <div id="mainchart" class="apex-chart px-4">

            </div>
        </div>

        <x-profile-dashboard-latest-activity :latestProposals="$latestProposals" :latestVotes="$latestVotes"/>

        <div class="lg:col-span-5 h-fit shadow-lg rounded-md bg-white">
            <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                <h6 class="text-lg font-semibold">{{__('Category most Participated in')}}</h6>
            </div>
            <div class="flex h-fit flex-col items-center justify-between border-gray-100 dark:border-gray-800">
                <div id="categoriesChart" class="apex-chart">
                </div>
            </div>
        </div>
        @if($user->proposals)
            <div class="lg:col-span-5 h-fit shadow-lg rounded-md bg-white">
                <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                    <h6 class="text-lg font-semibold">{{__('Votes Per Gender')}}</h6>
                </div>
                <div class="flex flex-col items-center justify-between border-gray-100 dark:border-gray-800">
                    <span id="genderChart" class="apex-chart"/>
                </div>
            </div>
        @endif
    </div>
</div>
<?php
//PASS THE VARIABLES TO THE CHARTS
    echo "<script> var editionNames = '$editionNamesJson';</script>";
    echo "<script> var editionVotes = '$votesPerEditionJson';</script>";
    echo "<script> var categoryNames = '$categoryNamesJson';</script>";
    echo "<script> var categoryVotes = '$votesPerCategoryJson';</script>";
    echo "<script> var genderVotes = '$genderVotes';</script>";
    echo "<script> var genderNames = '$genderNames';</script>";
?>

@push('scripts')
    <script>
        statistics();
    </script>
@endpush
