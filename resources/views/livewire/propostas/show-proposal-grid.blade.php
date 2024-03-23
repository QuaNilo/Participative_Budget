@props(['proposals', 'proposals_per_user', 'user_proposals_count'])
<div>
    <div class="flex justify-between">
        <form wire:submit="filter">
            <div class="flex">
                <div>
                  <select wire:model="category_selected" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500">
                   <option value="{{false}}">{{__('Choose a Category')}}</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div>
                  <select wire:model="status_selected" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500">
                    <option value="{{false}}">{{__('Choose a Proposal State')}}</option>
                    @foreach(\App\Models\Proposal::getStatusArray() as $statusId => $statusName)
                        <option value="{{$statusId}}">{{$statusName}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="relative w-[450px]">
                    <input name="name" wire:model="keywordsInput" type="text" class="block p-2.5 w-full z-20 text-sm text-gray-900 hover:bg-gray-100 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-indigo-500" placeholder="{{__('Search for proposal titles...')}}"/>
                    <div>@error('keywordsInput') {{ $message }} @enderror</div>
                    <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-indigo-600 rounded-e-lg border border-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>
        <div class="flex align-items-end justify-end space-x-3 mt-4">
            <livewire:proposals-sort/>
            <x-button class="px-2 py-2 bg-indigo-600 hover:bg-indigo-800 active:bg-indigo-900">
                        <a href="{{ route('mapa', $edition->id) }}">{{__('Map')}}
                        </a>
            </x-button>
            @if(!in_array($edition->status, [0, 1, 2, 3]))
                <div class="relative">
                    <button class="@if($showWinners) bg-gradient-to-r from-amber-600 to-amber-400 hover:bg-amber-600 @else bg-indigo-600 hover:bg-indigo-800 active:bg-indigo-900 @endif px-1 py-1 inline-flex items-center border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides transition ease-in-out duration-150'" wire:click="winners"><i class="uil uil-star @if($showWinners) text-yellow-50 @else @endif  font-bold text-base mr-2"></i>{{__('Winning Projects')}}</button>
                </div>
            @endif
            @auth()
                @if($edition->status == 1)
                    @if($proposals_per_user !== 0 && $user_proposals_count >= $proposals_per_user)
                        <x-button class="px-2 py-2 bg-indigo-600 hover:bg-indigo-800 active:bg-indigo-900">
                            <a
                                href="{{ route('display_warning', ['message' => __('Exceeded maximum proposals for this edition')]) }}">{{__('Create Proposal')}}
                            </a>
                        </x-button>
                    @elseif(\App\Models\Setting::first()->require_cc_vote_create && !auth()->user()->citizen->CC_verified)
                        <x-button class="px-2 py-2 bg-indigo-600 hover:bg-indigo-800 active:bg-indigo-900">
                            <a
                                href="{{ route('display_warning', ['message' => __('Your Citizen Card needs to be validated to create Proposals')]) }}">{{__('Create Proposal')}}
                            </a>
                        </x-button>
                    @elseif(\App\Models\Setting::first()->require_address_vote_create && !auth()->user()->citizen->address_verified)
                        <x-button class="px-2 py-2 bg-indigo-600 hover:bg-indigo-800 active:bg-indigo-900">
                            <a
                                href="{{ route('display_warning', ['message' => __('Your Address needs to be validated to create Proposals')]) }}">{{__('Create Proposal')}}
                            </a>
                        </x-button>
                    @else
                        <x-button class="px-2 py-2 bg-indigo-600 hover:bg-indigo-800 active:bg-indigo-900">
                            <a
                                href="{{ route('proposal-create', $edition->id) }}">{{__('Create Proposal')}}
                            </a>
                        </x-button>

                    @endif
                @endif
            @endauth
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[50px] mt-8">
                @foreach($proposals as $proposal)
                    <x-frontend.propostas.proposal-card :proposal="$proposal"/>
                @endforeach

    </div>
        <x-frontend.propostas.pagination :proposals="$proposals"/>
</div>

