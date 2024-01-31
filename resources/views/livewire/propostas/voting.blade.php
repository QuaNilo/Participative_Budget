<div>
    @if($has_voted)
        <x-button wire:click="vote" class="bg-green-600 bg-gradient-to-r from-indigo-600 to-indigo-400 dark:bg-green-200  mt-2">
            <li class="inline"><i class="mdi mdi-thumb-up text-lg text-green-400 p-2"></i>
                <p class="inline text-white font-bold">{{$proposal->votes_count}}</p>
                {{$proposal->votes_count == 1 ? 'Voto' : 'Votos'}}
            </li>
        </x-button>
    @else
        <x-button wire:click="vote" class="bg-gray-500 mt-2">
                <li class="inline"><i class="mdi mdi-thumbs-up-down text-lg text-indigo-400 p-2"></i> <p class="inline text-white font-bold">{{$proposal->votes_count}}</p> Voto</li>
        </x-button>
    @endif

</div>
