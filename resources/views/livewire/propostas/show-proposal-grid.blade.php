@props(['proposals', 'proposals_per_user', 'user_proposals_count'])
<div>
    <div class="mb-12">
{{--        <h1 class="text-3xl "><span class="text-4xl font-medium text-black">{{$edition->identifier}}</span></h1>--}}
{{--        <h2 class="my-4 text-base text-slate-800">{{$edition->title}}</h2>--}}
{{--        <h3 class="my-4 text-base text-slate-800">{{$edition->description}}</h3>--}}
{{--        <h1 class="text-xl mt-1"><span class="text-slate-600 text-base">{{__('Status')}} : </span><span class="text-xl font-medium text-black">{{$edition->status_label}}</span></h1>--}}
{{--        <h1 class="text-xl mt-1"><span class="text-slate-600 text-base">{{__('Ano')}} : </span><span class="text-xl font-medium text-black">{{$edition->ano}}</span></h1>--}}

    </div>

    <div class="flex items-center space-x-8">
{{--                            <div class="lg:col-span-4 md:col-span-4 md:text-end">--}}
{{--                                <div class="container relative">--}}
{{--                                    <div class="flex ">--}}
{{--                                        <div class="bg-white dark:bg-slate-900 shadow-xl dark:shadow-gray-800">--}}
{{--                                            <form class="" wire:submit="filter">--}}
{{--                                                <div class="relative text-dark text-start">--}}
{{--                                                    <div class="relative flex justify-center items-center  space-x-4 lg:divide-gray-200 lg:dark:divide-gray-700">--}}
{{--                                                        <div class="">--}}
{{--                                                            <i class="uil uil-search absolute top-[48%] -translate-y-1/2 start-3 z-1 text-indigo-600 text-[20px]"></i>--}}
{{--                                                            <input wire:model="keywordsInput" name="name" type="text" class="form-input lg:rounded-t-sm lg:rounded-e-none lg:rounded-b-none lg:rounded-s-sm lg:outline-0 w-full filter-input-box bg-gray-50 dark:bg-slate-800 border-0 focus:ring-0 bg-slate-300/20" placeholder="Search your keywords">--}}
{{--                                                            <div>@error('keywordsInput') {{ $message }} @enderror</div>--}}
{{--                                                        </div>--}}
{{--                    --}}
{{--                                                        <div class="relative">--}}
{{--                                                            <i class="uil uil-estate absolute top-[48%] -translate-y-1/2 start-3 z-1 text-white text-[20px]"></i>--}}
{{--                                                            <select class=" bg-slate-800 hover:bg-slate-950 text-white pl-10" wire:model="category_selected">--}}
{{--                                                                <option value="{{false}}">Escolha uma categoria</option>--}}
{{--                                                                @foreach($categories as $category)--}}
{{--                                                                    <option value="{{$category->id}}">{{$category->name}}</option>--}}
{{--                                                                @endforeach--}}
{{--                                                            </select>--}}
{{--                                                        </div>--}}
{{--                    --}}
{{--                                                        <div class="relative ">--}}
{{--                                                            <i class="uil uil-envelope-check absolute top-[48%] -translate-y-1/2 start-3 z-1 text-white text-[20px]"></i>--}}
{{--                                                            <select class=" bg-slate-800 hover:bg-slate-950 text-white pl-10" wire:model="status_selected">--}}
{{--                                                                <option value="{{false}}">Escolha um estado</option>--}}
{{--                                                                @foreach(\App\Models\Proposal::getStatusArray() as $statusId => $statusName)--}}
{{--                                                                    <option value="{{$statusId}}">{{$statusName}}</option>--}}
{{--                                                                @endforeach--}}
{{--                                                            </select>--}}
{{--                                                        </div>--}}
{{--                    --}}
{{--                                                        <div class="flex justify-center align-content-center bg-indigo-600 hover:bg-indigo-800 w-16 h-full">--}}
{{--                                                            <button class="h-16 w-full" type="submit" id="search" name="search">--}}
{{--                                                                <i class="uil uil-search text-white text-[20px]"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </div>--}}
{{--                                                    </div><!--end grid-->--}}
{{--                                                </div><!--end container-->--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div><!--end grid-->--}}
{{--                                </div><!--end container-->--}}
        <div class="container relative">
            <div class="grid grid-cols-1">
                <div class="p-6 bg-white dark:bg-slate-900 rounded-md shadow-md dark:shadow-gray-800 gap-4">
                    <form wire:submit="filter">
                        <div class="border-r border-1 relative text-dark text-start">
                            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6 lg:divide-x-[1px] lg:divide-gray-200 lg:dark:divide-gray-700">
                                <div class="h-[60px] relative">
                                    <i class="uil uil-search absolute top-[48%] -translate-y-1/2 start-3 text-indigo-600 text-[20px]"></i>
                                    <input name="name" wire:model="keywordsInput" type="text" class="form-input lg:rounded-t-sm lg:rounded-e-none lg:rounded-b-none lg:rounded-s-sm lg:outline-0 w-full filter-input-box bg-gray-50 dark:bg-slate-800 border-0 focus:ring-0" placeholder="Search your keywords">
                                    <div>@error('keywordsInput') {{ $message }} @enderror</div>
                                </div>

                                <div class="filter-search-form relative">
                                    <i class="uil uil-estate absolute top-[38%] left-[5%] -translate-y-1/2 start-1 text-indigo-600 text-[20px]"></i>
                                    <select class="w-full h-[60px] pl-14 border-0 pb-6 text-base text-start text-slate-400" wire:model="category_selected">
                                        <option value="{{false}}">{{__('Escolha uma Categoria')}}</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="filter-search-form relative">
                                    <i class="uil uil-pen absolute top-[38%] left-[5%] -translate-y-1/2 start-1 text-indigo-600 text-[20px]"></i>
                                    <select class="w-full h-[60px] pl-14 border-0 pb-6 text-base text-start text-slate-400" wire:model="status_selected">
                                        <option value="{{false}}">Escolha um estado</option>
                                        @foreach(\App\Models\Proposal::getStatusArray() as $statusId => $statusName)
                                            <option value="{{$statusId}}">{{$statusName}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="lg:mt-6">
                                    <input type="submit" id="search" name="search" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white searchbtn w-full !h-12 rounded" value="{{__('Search')}}">
                                </div>
                            </div><!--end grid-->
                        </div><!--end container-->
                    </form>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </div><!--end grid-->

    <div class="flex align-items-end justify-end space-x-3 mt-4">
        <x-button class="px-2 py-2 bg-slate-800 hover:bg-slate-950 active:bg-slate-800">
                    <a href="{{ route('mapa', $edition->id) }}">MAPA
                    </a>
        </x-button>
        @if(!in_array($edition->status, [0, 1, 2, 3]))
            <div class="relative">
                <button class="@if($showWinners) bg-gradient-to-r from-amber-600 to-amber-400 hover:bg-amber-600 @else bg-slate-800 hover:bg-slate-950 @endif px-1 py-1 inline-flex items-center dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest dark:hover:bg-white dark:focus:bg-white dark:active:bg-gray-300  dark:focus:ring-offset-gray-800 transition ease-in-out duration-150'" wire:click="winners"><i class="uil uil-star @if($showWinners) text-yellow-50 @else text-amber-400 @endif  font-bold text-base mr-2"></i> Projectos Vencedores</button>
            </div>
        @endif
        @auth()
            @if($edition->status == 1)
                @if($proposals_per_user !== 0 && $user_proposals_count >= $proposals_per_user)
                    <x-button class="px-2 py-2 bg-slate-800 hover:bg-slate-950 active:bg-slate-800">
                        <a
                            href="{{ route('display_warning') }}">Create Proposal
                        </a>
                    </x-button>
                @elseif(\App\Models\Setting::first()->require_cc_vote_create && !auth()->user()->citizen->CC_verified)
                    <x-button class="px-2 py-2 bg-slate-800 hover:bg-slate-950 active:bg-slate-800">
                        <a
                            href="{{ route('display_warning_cc') }}">Create Proposal
                        </a>
                    </x-button>
                @elseif(\App\Models\Setting::first()->require_address_vote_create && !auth()->user()->citizen->address_verified)
                    <x-button class="px-2 py-2 bg-slate-800 hover:bg-slate-950 active:bg-slate-800">
                        <a
                            href="{{ route('display_warning_address') }}">Create Proposal
                        </a>
                    </x-button>
                @else
                    <x-button class="px-2 py-2 bg-slate-800 hover:bg-slate-950 active:bg-slate-800">
                        <a
                            href="{{ route('proposal-create', $edition->id) }}">Create Proposal
                        </a>
                    </x-button>

                @endif
            @endif
        @endauth
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[50px] mt-8 ">
                @foreach($proposals as $proposal)
                    <x-frontend.propostas.proposal-card :proposal="$proposal"/>
                @endforeach

    </div>
        <x-frontend.propostas.pagination :proposals="$proposals"/>
</div>

