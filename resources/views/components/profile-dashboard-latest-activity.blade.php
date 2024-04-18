<div x-data="{ activeTab: 'proposals' }" class="col-span-4 lg:col-span-4 shadow-lg rounded-md p-4 pb-2 mt-2 pt-1 bg-white ">
    <div class="flex justify-around items-center border-b border-slate-200/60 bg-white sm:py-3 pl-0">
        <h2 class="text-lg font-semibold">Latest Activity</h2>
        <div class="flex flex-row space-x-4 p-3 rounded-3xl">
            <a :class="{ 'text-primary': activeTab === 'proposals' }" class="text-lg font-semibold cursor-pointer" @click="activeTab = 'proposals'" >Proposals</a>
            <a :class="{ 'text-primary': activeTab === 'votes' }" class="text-lg font-semibold cursor-pointer" @click="activeTab = 'votes'" >Votes</a>
        </div>
    </div>
    <div class="">
        <div x-show="activeTab === 'proposals'">
            @foreach($latestProposals as $proposal)
                <div class="relative mt-5 flex items-center border-b">
                    <div class="ml-4 mr-auto">
                        <div class="mr-5 text-slate-600 sm:mr-5">
                            {{$proposal->title}}
                        </div>
                        <p class="font-medium text-slate-400 text-xs">{{ \Carbon\Carbon::parse($proposal->created_at)->diffForHumans() }}</p>
                    </div>
                    <div class="font-medium text-primary dark:text-slate-500">
                        {{ isset($proposal->action) ? $proposal->action : 'Updated' }}
                    </div>
                </div>
            @endforeach
        </div>
        <div x-show="activeTab === 'votes'">
            @foreach($latestVotes as $vote)
                <div class="relative mt-5 flex items-center border-b">
                    <div class="ml-4 mr-auto">
                        <div class="mr-5 text-slate-600 sm:mr-5">
                            {{$vote->proposal->title}}
                        </div>
                        <p class="font-medium text-slate-400 text-xs">{{ \Carbon\Carbon::parse($vote->created_at)->diffForHumans() }}</p>
                    </div>
                    <div class="font-medium text-primary dark:text-slate-500">
                        {{__('Voted')}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
