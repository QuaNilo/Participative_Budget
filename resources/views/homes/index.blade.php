<x-app-layout>
    @section('breadcrumbs')
        {{ Breadcrumbs::render('homes.index') }}
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
        <h2 class="mr-auto text-lg font-medium">{{ __('Home') }}</h2>

    </div>
        <div>
        <form action="{{ route('homes.update', \App\Models\Home::first()) }}" method="POST" accept-charset="UTF-8">
            @csrf
            @method("PATCH")
            <div class="mb-3">
                    <livewire:files-upload
                        inputName="wallpaper"
                        :isMultiple="false"
                        :isWallPaper="true"
                        maxFiles="1"
                        maxFileSize="10240"
                        :previousFiles="\App\Models\Home::first()->getMedia('wallpaper') ?? collect()"
                        :label="__('Upload Wallpaper')"
                        acceptedFileTypes="*/*"
                        :uploadFieldMainLabel="__('Upload Wallpaper')"
                    />
                </div>
            <div class="mt-5 text-right">
                <x-base.button
                    class="mr-1 w-24"
                    type="a"
                    variant="outline-secondary"
                    href="{{ route('homes.index') }}"
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
    <!-- BEGIN: HTML Table Data cannot use intro-y because break modals -->
    <div class="mt-8">
        <x-base.home-components.home-bullet-points-table/>
        <x-base.home-components.home-bullet-infos-table/>
    </div>

</x-app-layout>
