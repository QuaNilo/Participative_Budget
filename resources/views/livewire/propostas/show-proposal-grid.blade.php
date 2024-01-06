<div>
    <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
        <div class="lg:col-span-9 md:col-span-8">
            <h3 class="text-xl leading-normal font-semibold">Showing 1-8 of 16 results</h3>
        </div>

        <div class="lg:col-span-3 md:col-span-4 md:text-end">
            <label class="font-semibold ">Sort By</label>
            <button wire:click="sortVotes" class="border-2">Votes</button>
            <button wire:click="sortLatest" class="border-2">Latest</button>
        </div>
    </div><!--end grid-->
    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[50px] mt-8">
        @foreach($proposals as $proposal)
            <div class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden">
                <div class="content p-6 relative flex flex-col h-full">
                    <div class="flex-grow">
                        <a href="course-detail.html" class="font-medium block text-indigo-600">{{$proposal->category()->first()->name}}</a>
                        <p class="text-slate-400 mt-3 mb-4">{{$proposal->summary}}</p>
                    </div>
                    <div>
                        <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
                            <li class="flex items-center me-4">
                                <i class="uil uil-book-open text-lg leading-none me-2 text-slate-900 dark:text-white"></i>
                                <span>{{$proposal->votes_count}} Votes</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <x-frontend.propostas.pagination :proposals="$proposals"/>
</div>
