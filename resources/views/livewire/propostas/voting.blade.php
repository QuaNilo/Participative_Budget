<div>
    @if($has_voted !== false)
        <x-button wire:click="vote" class="bg-green-600 active:bg-green-900 focus:bg-green-700 hover:bg-green-700 dark:bg-green-200  mt-2">
                <i class="uil-thumbs-up">
                    Voto
                </i>
        </x-button>
    @else
        <x-button wire:click="vote" class="bg-gray-500 mt-2">
                <i class="">
                    Voto
                </i>
        </x-button>
    @endif
</div>
