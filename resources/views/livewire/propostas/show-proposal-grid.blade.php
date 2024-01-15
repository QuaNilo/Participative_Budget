<div>
    <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
        <div class="lg:col-span-3 md:col-span-4 md:text-end">
            <x-button wire:click="sortVotes">Votes</x-button>
            <x-button wire:click="sortLatest">Latest</x-button>
            @auth
                <x-button class="bg-indigo-600 mt-2 hover:bg-indigo-800 active:bg-indigo-800" ><a href="{{ route('proposal-create') }}">Create Proposal</a></x-button>
            @endauth

        </div>
    </div><!--end grid-->
    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[50px] mt-8">
        @foreach($proposals as $proposal)
            <div class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden">
                <div class="content p-6 relative flex flex-col h-full">
                    <a href="propostas/{{$proposal->id}}">
                        <div class="flex-grow">
                            <span class="font-extrabold block text-indigo-600">{{$proposal->title}}</span>
                            <span class="font-medium block text-indigo-600">{{$proposal->category()->first()->name}}</span>
                            <p class="text-slate-400 mt-3 mb-4">{{$proposal->summary}}</p>
                        </div>
                        <div>
                            <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
                                <li class="flex items-center me-4">
                                    <i class="uil uil-book-open text-lg leading-none me-2 text-slate-900 dark:text-white"></i>
                                    <span>{{$proposal->votes_count}} Votes</span>
                                </li>
                                <li class="flex items-center me-4">
                                    <i class="uil uil-user text-lg leading-none me-2 text-slate-900 dark:text-white"></i>
                                    <span>{{$proposal->user->name}}</span>
                                </li>
                                <li class="flex items-center me-4">
                                    <i class="uil uil-check text-lg leading-none me-2 text-slate-900 dark:text-white"></i>
                                    <span>{{$proposal->status_label}}</span>
                                </li>
                                <li class="flex items-center me-4">
                                    <i class="uil uil-clock text-lg leading-none me-2 text-slate-900 dark:text-white"></i>
                                    <span>{{ \Carbon\Carbon::parse($proposal->created_at)->diffForHumans() }}</span>
                                </li>

                            </ul>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <x-frontend.propostas.pagination :proposals="$proposals"/>
</div>
