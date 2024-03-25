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
    </div>
    <!-- BEGIN: HTML Table Data cannot use intro-y because break modals -->
    <div class="mt-8">
        <livewire:citizens-table />

    </div>
</x-app-layout>
