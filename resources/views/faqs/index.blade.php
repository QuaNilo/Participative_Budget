<x-app-layout>
    @section('breadcrumbs')
        {{ Breadcrumbs::render('faqs.index') }}
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
        <h2 class="mr-auto text-lg font-medium">{{ __('Frequently Asked Questions') }}</h2>
        <div class="mt-4 flex w-full sm:mt-0 sm:w-auto">
            <x-base.button
                class="mr-2 shadow-md"
                variant="primary"
                href="{{ route('faq-themes.create') }}"
                as="a"
            >
                {{ __('Create Category') }}
            </x-base.button>
            <x-base.button
                class="mr-2 shadow-md"
                variant="primary"
                href="{{ route('faqs.create') }}"
                as="a"
            >
                {{ __('Create Question') }}
            </x-base.button>
        </div>
    </div>
    <!-- BEGIN: HTML Table Data cannot use intro-y because break modals -->
    <div class="mt-8">
        <livewire:faqs-table />
    </div>

</x-app-layout>
