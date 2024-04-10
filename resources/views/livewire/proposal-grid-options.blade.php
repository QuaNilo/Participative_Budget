<div class="flex flex-row space-x-3 items-center">
    <x-button class="px-2 py-2 text-sm font-medium bg-indigo-600 hover:bg-indigo-800 active:bg-indigo-900">
        <a href="{{ route('mapa', $edition->id) }}">{{__('Map')}}
        </a>
    </x-button>
    @if(!in_array($edition->status, [0, 1, 2, 3]))
        <div class="">
            <button class="@if($showWinners) bg-gradient-to-r from-amber-600 to-amber-400 hover:bg-amber-600 @else bg-indigo-600 hover:bg-indigo-800 active:bg-indigo-900 @endif font-medium px-1 py-1 inline-flex items-center border border-transparent rounded-md text-sm text-white uppercase tracking-wides transition ease-in-out duration-150'" wire:click="winnersToParent"><i class="uil uil-star @if($showWinners) text-yellow-50 @else @endif  font-bold text-sm mr-1"></i>{{__('Winning Projects')}}</button>
        </div>
    @endif
    @auth()
        @if($edition->status == 1)
            @if($edition->proposals_per_user !== 0 && $user_proposals_count >= $edition->proposals_per_user)
                <x-button class="px-2 py-2 text-sm font-medium bg-indigo-600 hover:bg-indigo-800 active:bg-indigo-900">
                    <a
                        href="{{ route('display_warning', ['message' => __('Exceeded maximum proposals for this edition')]) }}">{{__('Create Proposal')}}
                    </a>
                </x-button>
            @elseif(\App\Models\Setting::first()->require_cc_vote_create && !auth()->user()->citizen->CC_verified)
                <x-button class="px-2 py-2 text-sm font-medium bg-indigo-600 hover:bg-indigo-800 active:bg-indigo-900">
                    <a
                        href="{{ route('display_warning', ['message' => __('Your Citizen Card needs to be validated to create Proposals')]) }}">{{__('Create Proposal')}}
                    </a>
                </x-button>
            @else
                <x-button class="px-2 py-2 text-sm font-medium bg-indigo-600 hover:bg-indigo-800 active:bg-indigo-900">
                    <a
                        href="{{ route('proposal-create', $edition->id) }}">{{__('Create Proposal')}}
                    </a>
                </x-button>

            @endif
        @endif
    @endauth
</div>
