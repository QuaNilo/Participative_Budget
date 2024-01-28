@props(['proposals'])
<div>
    <h1 class="text-3xl mb-12"><span class="text-4xl font-medium text-black">{{__('Edição')}} {{$edition->identifier}}</span></h1>

    <div class="flex items-center space-x-8">
        <div class="lg:col-span-4 md:col-span-4 md:text-end">
            <div class="container relative">
                <div class="flex ">
                    <div class="bg-white dark:bg-slate-900 shadow-xl dark:shadow-gray-800">
                        <form class="" wire:submit="filter">
                            <div class="relative text-dark text-start">
                                <div class="relative flex justify-center items-center  space-x-4 lg:divide-gray-200 lg:dark:divide-gray-700">
                                    <div class="">
                                        <i class="uil uil-search absolute top-[48%] -translate-y-1/2 start-3 z-1 text-indigo-600 text-[20px]"></i>
                                        <input wire:model="keywordsInput" name="name" type="text" id="job-keyword" class="form-input lg:rounded-t-sm lg:rounded-e-none lg:rounded-b-none lg:rounded-s-sm lg:outline-0 w-full filter-input-box bg-gray-50 dark:bg-slate-800 border-0 focus:ring-0 bg-slate-300/20" placeholder="Search your keywords">
                                        <div>@error('keywordsInput') {{ $message }} @enderror</div>
                                    </div>

                                    <div class="relative">
                                        <i class="uil uil-estate absolute top-[48%] -translate-y-1/2 start-3 z-1 text-white text-[20px]"></i>
                                        <select class=" bg-slate-800 hover:bg-slate-950 text-white pl-10" wire:model="category_selected">
                                            <option>Escolha uma categoria</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="relative ">
                                        <i class="uil uil-envelope-check absolute top-[48%] -translate-y-1/2 start-3 z-1 text-white text-[20px]"></i>
                                        <select class=" bg-slate-800 hover:bg-slate-950 text-white pl-10" wire:model="status_selected">
                                            <option>Escolha um estado</option>
                                            @foreach(\App\Models\Proposal::getStatusArray() as $statusId => $statusName)
                                                <option value="{{$statusId}}">{{$statusName}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="flex justify-center align-content-center bg-indigo-600 hover:bg-indigo-800 w-16 h-full">
                                        <button class="h-16 w-full" type="submit" id="search" name="search">
                                            <i class="uil uil-search text-white text-[20px]"></i>
                                        </button>
                                    </div>
                                </div><!--end grid-->
                            </div><!--end container-->
                        </form>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </div>
        <div class="flex-grow"></div>
        <div class="flex flex-row space-x-4 items-center justify-center">
            @if($edition->status != 1)
                <div class="relative">

                    <button class="@if($showWinners) bg-gradient-to-r from-amber-600 to-amber-400 hover:bg-amber-600 @else bg-slate-800 hover:bg-slate-950 @endif px-1 py-1 inline-flex items-center dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest dark:hover:bg-white dark:focus:bg-white dark:active:bg-gray-300  dark:focus:ring-offset-gray-800 transition ease-in-out duration-150'" wire:click="winners"><i class="uil uil-star @if($showWinners) text-yellow-50 @else text-amber-400 @endif  font-bold text-base mr-2"></i> Projectos Vencedores</button>
                </div>
            @endif
            @auth
                <x-button class="px-2 py-2 bg-slate-800 hover:bg-slate-950 active:bg-slate-800"><a
                        href="{{ route('proposal-create') }}">Create Proposal</a></x-button>
            @endauth
        </div>
    </div><!--end grid-->
    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[50px] mt-8 ">
                @foreach($proposals as $proposal)
                    <x-frontend.propostas.proposal-card :proposal="$proposal"/>
                @endforeach

    </div>
        <x-frontend.propostas.pagination :proposals="$proposals"/>
</div>
