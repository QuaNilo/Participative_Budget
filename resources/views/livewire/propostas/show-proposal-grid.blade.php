@props(['proposals'])
<div>
    <h1 class="text-3xl mb-32"><span class="text-4xl font-medium text-black">{{__('Edição')}} {{$edition->identifier}}</span></h1>

    <div class="flex mt-12 items-center space-x-8">
        <div class="lg:col-span-6 md:col-span-4 md:text-end">
            <div class="container relative -mt-16 z-1">
            <div class="flex ">
                <div class="p-6 bg-white dark:bg-slate-900 rounded-md shadow-xl dark:shadow-gray-800">
                    <form wire:submit="filter">
                        <div class="relative text-dark text-start">
                            <div class="flex justify-center items-center space-x-3 lg:divide-x-[1px] lg:divide-gray-200 lg:dark:divide-gray-700">
                                <div class="">
                                    <i class="uil uil-search absolute top-[48%] -translate-y-1/2 start-3 z-1 text-indigo-600 text-[20px]"></i>
                                    <input wire:model="keywordsInput" name="name" type="text" id="job-keyword" class="form-input lg:rounded-t-sm lg:rounded-e-none lg:rounded-b-none lg:rounded-s-sm lg:outline-0 w-full filter-input-box bg-gray-50 dark:bg-slate-800 border-0 focus:ring-0" placeholder="Search your keywords">
                                    <div>@error('keywordsInput') {{ $message }} @enderror</div>
                                </div>

                                <div class="relative">
                                    <i class="uil uil-estate absolute top-[48%] -translate-y-1/2 start-3 z-1 text-white text-[20px]"></i>
                                    <select class="rounded-full bg-indigo-600 text-white pl-10" wire:model="category_selected">
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
            @if($edition->status != 1)
                <div class="relative">
                    <button class="py-2 px-5 inline-block font-semibold tracking-wide border rounded align-middle duration-500 text-base text-center @if($showWinners) bg-green-600 hover:bg-green-800 @else bg-slate-500 hover:bg-slate-800 @endif border-indigo-600 text-white w-full !h-12" wire:click="winners">Projectos Vencedores</button>
                </div>
            @endif
            @auth
                <x-button class="bg-indigo-600 mt-2 hover:bg-indigo-800 active:bg-indigo-800"><a
                        href="{{ route('proposal-create') }}">Create Proposal</a></x-button>
            @endauth
        </div>
    </div><!--end grid-->
    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[50px] mt-8">
                @foreach($proposals as $proposal)
                    <x-frontend.propostas.proposal-card :proposal="$proposal"/>
                @endforeach

    </div>
        <x-frontend.propostas.pagination :proposals="$proposals"/>
</div>
