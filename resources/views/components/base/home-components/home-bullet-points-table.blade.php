<div>

    <div class="intro-y mt-8 flex flex-col items-center sm:flex-row">
        <h2 class="mr-auto text-lg font-medium">{{ __('Bullet Points') }}</h2>
        <div class="mt-4 flex w-full sm:mt-0 sm:w-auto">
            <x-base.button
                class="mr-2 shadow-md"
                variant="primary"
                href="{{ route('home-bullet-points.create') }}"
                as="a"
            >
                {{ __('Create a Bullet Point') }}
            </x-base.button>
        </div>
    </div>
    <!-- BEGIN: HTML Table Data cannot use intro-y because break modals -->
    <div class="mt-8">
        <livewire:home-bullet-points-table/>

    </div>
</div>
