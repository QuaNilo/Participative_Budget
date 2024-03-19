<x-app-layout>
    @section('breadcrumbs')
        {{ Breadcrumbs::render('home-infos.create') }}
    @endsection
    <div class="intro-y mt-8 flex flex-col items-center sm:flex-row">
        <h2 class="mr-auto text-lg font-medium">{{ __('Create Home Info') }}</h2>
    </div>
    <div class="intro-y box mt-3 p-5">
        <form action="{{ route('home-infos.store') }}" method="POST" accept-charset="UTF-8">
            @csrf
            @include('home_infos.fields')

            <div class="mt-5 text-right">
                <x-base.button
                    class="mr-1 w-24"
                    type="a"
                    variant="outline-secondary"
                    href="{{ route('home-infos.index') }}"
                >{{ __('Cancel') }}
                </x-base.button>
                <x-base.button
                    class="w-24"
                    type="submit"
                    variant="primary"
                >{{ __('Save') }}
                </x-base.button>
            </div>
        </form>
    </div>
</x-app-layout>
