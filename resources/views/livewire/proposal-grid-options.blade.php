<div class="flex flex-row space-x-3 items-center">
    <x-button class="px-2 py-2 font-semibold bg-primary hover:bg-primary-hover active:bg-primary-active">
        <a href="{{ route('mapa', $edition->id) }}">{{__('Map')}}
        </a>
    </x-button>
    @if(!in_array($edition->status, [0, 1, 2, 3]))
        <div class="">
            <button class="@if($showWinners) bg-gradient-to-r from-primary to-secondary @else bg-primary hover:bg-primary-hover active:bg-primary-active @endif font-semibold px-2 py-1 inline-flex items-center rounded-md text-white uppercase transition ease-in-out duration-150'" wire:click="winnersToParent"><i class="uil uil-star @if($showWinners) text-yellow-50 @else @endif  font-bold text-sm"></i>{{__('Winning Projects')}}</button>
        </div>
    @endif
    @auth()
        @if($edition->status == 1)
            @if($edition->proposals_per_user !== 0 && $user_proposals_count >= $edition->proposals_per_user)
                <x-button class="px-2 py-2 font-semibold bg-primary hover:bg-primary-hover active:bg-primary-active">
                    <a
                        href="{{ route('display_warning', ['message' => __('Exceeded maximum proposals for this edition')]) }}">{{__('Create Proposal')}}
                    </a>
                </x-button>
            @elseif(\App\Models\Setting::first()->require_cc_vote_create && !auth()->user()->citizen->CC_verified)
                <x-button class="px-2 py-2 font-semibold bg-primary hover:bg-primary-hover active:bg-primary-active">
                    <a
                        href="{{ route('display_warning', ['message' => __('Your Citizen Card needs to be validated to create Proposals')]) }}">{{__('Create Proposal')}}
                    </a>
                </x-button>
            @else
                <x-button class="px-2 py-2 font-semibold bg-primary hover:bg-primary-hover active:bg-primary-active">
                    <a
                        href="{{ route('proposal-create', $edition->id) }}">{{__('Create Proposal')}}
                    </a>
                </x-button>

            @endif
        @endif
    @endauth
</div>
