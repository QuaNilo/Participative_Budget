@props(['proposals', 'edition'])
<x-landing-layout>
    <div class="flex flex-col my-24">
        @if($edition->id)
            <div class="flex space-x-5 justify-around">
                <div class="flex space-x-3 my-5 font-medium text-3xl align-middle ">
                    <span>{{__('Edition')}}</span>
                    <span class="flex items-center align-middle text-primary ">{{$edition->identifier}}</span>
                </div>
                <div class="flex space-x-3 my-5 font-medium text-3xl align-middle ">
                    <span>{{__('Status')}}</span>
                    <span class="flex items-center text-primary ">{{$edition->status_label}}</span>
                </div>
            </div>
        @endif
        <x-frontend.show-map :proposals="$proposals"/>

    </div>
</x-landing-layout>
