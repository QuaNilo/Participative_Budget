@props(['proposals'])
<div>
    <div class="flex mt-12 items-center space-x-8">
        <div class="lg:col-span-6 md:col-span-4 md:text-end">
{{--            <x-button wire:click="sortVotes">Votes <i class="uil uil-arrow-up text-lg leading-none me-2 text-slate-900 dark:text-white"></i></x-button>--}}
{{--            <x-button wire:click="sortLatest">Latest</x-button>--}}
{{--            <select class="rounded-full bg-indigo-600 text-white" wire:model.change="category_selected">--}}
{{--                <option>Escolha uma categoria</option>--}}
{{--                @foreach($categories as $category)--}}
{{--                    <option value="{{$category->id}}">{{$category->name}}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--            <select class="rounded-full bg-indigo-600 text-white" wire:model.change="status_selected">--}}
{{--                <option>Escolha um estado</option>--}}
{{--                @foreach(\App\Models\Proposal::getStatusArray() as $statusId => $statusName)--}}
{{--                    <option value="{{$statusId}}">{{$statusName}}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}

            <div class="container relative -mt-16 z-1">
            <div class="flex ">
                <div class="p-6 bg-white border-2 border-indigo-600 dark:bg-slate-900 rounded-md shadow-md dark:shadow-gray-800">
                    <form wire:submit="filter">
                        <div class="relative text-dark text-start">
                            <div class="flex justify-center items-center space-x-3 lg:divide-x-[1px] lg:divide-gray-200 lg:dark:divide-gray-700">
                                <div class="">
                                    <i class="uil uil-search absolute top-[48%] -translate-y-1/2 start-3 z-1 text-indigo-600 text-[20px]"></i>
                                    <input wire:model="keywordsInput" name="name" type="text" id="job-keyword" class="form-input lg:rounded-t-sm lg:rounded-e-none lg:rounded-b-none lg:rounded-s-sm lg:outline-0 w-full filter-input-box bg-gray-50 dark:bg-slate-800 border-0 focus:ring-0" placeholder="Search your keywords">
                                    @error('keywordsInput') <span class="error">{{ $message }}</span> @enderror
                                </div>

                                <div class="relative">
                                    <i class="uil uil-estate absolute top-[48%] -translate-y-1/2 start-3 z-1 text-white text-[20px]"></i>
                                    <select class="rounded-full bg-indigo-600 text-white pl-10" wire:model ="category_selected">
                                        <option>Escolha uma categoria</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="relative">
                                    <i class="uil uil-envelope-check absolute top-[48%] -translate-y-1/2 start-3 z-1 text-white text-[20px]"></i>
                                    <select class="rounded-full bg-indigo-600 text-white pl-10" wire:model="status_selected">
                                        <option>Escolha um estado</option>
                                        @foreach(\App\Models\Proposal::getStatusArray() as $statusId => $statusName)
                                            <option value="{{$statusId}}">{{$statusName}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="">
                                    <button type="submit" id="search" name="search" class="py-2 px-5 inline-block font-semibold tracking-wide border rounded align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white searchbtn w-full !h-12" value="Search">Search</button>
                                </div>
                            </div><!--end grid-->
                        </div><!--end container-->
                    </form>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
        </div>
        <div class="flex-grow"></div>
        <div class="">
            @auth
                <x-button class="bg-indigo-600 mt-2 hover:bg-indigo-800 active:bg-indigo-800"><a
                        href="{{ route('proposal-create') }}">Create Proposal</a></x-button>
            @endauth
        </div>
    </div><!--end grid-->
    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[50px] mt-8">
        @if(is_numeric($category_selected))
                @foreach($proposals as $proposal)
                        <x-frontend.propostas.proposal-card :proposal="$proposal"/>
                @endforeach
            @else
                @foreach($proposals as $proposal)
                    <x-frontend.propostas.proposal-card :proposal="$proposal"/>
                @endforeach

        @endif
    </div>
{{--    {{$proposals->links()}}--}}
        <x-frontend.propostas.pagination :proposals="$proposals"/>
</div>
