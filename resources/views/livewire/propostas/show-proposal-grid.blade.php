@props(['proposals'])
<div>
    <div class="flex items-center space-x-8">
        <div class="lg:col-span-6 md:col-span-4 md:text-end">
            <x-button wire:click="sortVotes">Votes</x-button>
            <x-button wire:click="sortLatest">Latest</x-button>
            <select class="rounded-full bg-indigo-600 text-white" wire:model.change="category_selected">
                <option>Escolha uma categoria</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <select class="rounded-full bg-indigo-600 text-white" wire:model.change="status_selected">
                <option>Escolha um estado</option>
                @foreach(\App\Models\Proposal::getStatusArray() as $statusId => $statusName)
                    <option value="{{$statusId}}">{{$statusName}}</option>
                @endforeach
            </select>
        </div>
        <div class="flex-grow"></div>
        <div class="">
            @auth
                <x-button class="bg-indigo-600 mt-2 hover:bg-indigo-800 active:bg-indigo-800"><a
                        href="{{ route('proposal-create') }}">Create Proposal</a></x-button>
            @endauth
        </div>
    </div><!--end grid-->
    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[50px] mt-8">
        @if(is_numeric($category_selected))
                @foreach($proposals as $proposal)
                        <x-frontend.propostas.proposal-card :proposal="$proposal"/>
                @endforeach
            @else
                @foreach($proposals as $proposal)
                    <x-frontend.propostas.proposal-card :proposal="$proposal"/>
                @endforeach

        @endif
    </div>
{{--    {{$proposals->links()}}--}}
        <x-frontend.propostas.pagination :proposals="$proposals"/>
</div>
