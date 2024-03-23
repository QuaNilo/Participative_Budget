<div class="flex flex-row items-center">

    <div class=" sm:mr-3 ml-auto flex w-full text-slate-600 text-xs sm:text-sm">
        Votes:  <span class="font-medium ml-1"> {{$proposal->votes_count}}</span>
    </div>
    @if($has_voted)
{{--        <x-button wire:click="vote" class="bg-green-600 bg-gradient-to-r from-indigo-600 to-indigo-400 dark:bg-green-200  mt-2">--}}
{{--            <li class="inline"><i class="mdi mdi-thumb-up text-lg text-green-400 p-2"></i>--}}
{{--                <p class="inline text-white font-bold">{{$proposal->votes_count}}</p>--}}
{{--                {{$proposal->votes_count == 1 ? 'Voto' : 'Votos'}}--}}
{{--            </li>--}}
{{--        </x-button>--}}
        <button wire:click="vote"  class="intro-x w-8 h-8 sm:w-10 sm:h-10 flex flex-none items-center justify-center rounded-full bg-primary text-white ml-2 tooltip" title="Download Documents">
            <i class="mdi mdi-thumb-up text-lg text-green-400 p-2"></i>
        </button>
    @else
        <button wire:click="vote" class="intro-x w-8 h-8 sm:w-10 sm:h-10 flex flex-none items-center justify-center rounded-full bg-primary text-white ml-2 tooltip" title="Download Documents">
            <i class="mdi mdi-thumbs-up-down text-lg text-indigo-400 p-2"></i>
        </button>
{{--        <x-button wire:click="vote" class="bg-gray-500 mt-2">--}}
{{--                <li class="inline"><i class="mdi mdi-thumbs-up-down text-lg text-indigo-400 p-2"></i> <p class="inline text-white font-bold">{{$proposal->votes_count}}</p> Voto</li>--}}
{{--        </x-button>--}}
    @endif

</div>
