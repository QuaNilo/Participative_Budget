<x-app-layout>
    @section('breadcrumbs')
        {{ Breadcrumbs::render('citizens.index') }}
    @endsection
    @once
        @push('firstStyles')
            @filamentStyles
        @endpush
    @endonce
    @once
        @push('scripts')
            @filamentScripts
        @endpush
    @endonce
    <div class="intro-y mt-8 flex flex-col items-center sm:flex-row">
        @if(request()->get('pending', 0) == 1)
            <h2 class="mr-auto text-lg font-medium">{{ __('Pending Citizens') }}</h2>
        @else
            <h2 class="mr-auto text-lg font-medium">{{ __('Citizens') }}</h2>
        @endif
        @if(\App\Models\Citizen::where('CC_verified', 2)->exists())
            <div>
                @if(request()->get('pending', 0) == 1)
                    <form action="{{route('citizens.index')}}" method="GET">
                        <x-base.button class="shadow-md sm:ml-0" variant="primary" type="submit">{{__('Citizens')}}</x-base.button>
                    </form>
                @else
                    <form action="{{route('citizens.index-pending')}}" method="POST">
                        @csrf
                        <input type="hidden" name="pending" value="1">
                        <x-base.button class="shadow-md sm:ml-0" variant="primary" type="submit">{{__('Pending Citizens')}}</x-base.button>
                    </form>
                @endif
            </div>
        @endif
    </div>
    <!-- BEGIN: HTML Table Data cannot use intro-y because break modals -->
    <div class="mt-8">
        <livewire:citizens-table />

    </div>
</x-app-layout>
