<div class="flex flex-row items-center">

    <div class=" sm:mr-3 ml-auto flex w-full text-slate-600 text-xs sm:text-sm">
        Votes:  <span class="font-medium ml-1"> {{$proposal->votes_count}}</span>
    </div>
    @if($has_voted)
        <button wire:click="vote"  class="intro-x w-8 h-8 sm:w-10 sm:h-10 flex flex-none items-center justify-center rounded-full bg-slate-300 text-white ml-2 tooltip" title="Download Documents">
            <i class="mdi mdi-thumb-up text-lg text-green-600 p-2"></i>
        </button>
    @else
        <button wire:click="vote" class="intro-x w-8 h-8 sm:w-10 sm:h-10 flex flex-none items-center justify-center rounded-full bg-slate-300 text-white ml-2 tooltip" title="Download Documents">
            <i class="mdi mdi-thumbs-up-down text-lg text-gray-600 p-2"></i>
        </button>
    @endif

</div>
