<x-app-layout>
    @section('breadcrumbs')
        {{ Breadcrumbs::render('citizens.show', $citizen) }}
    @endsection
    <div class="intro-y mt-8 flex flex-col  space-x-3 items-center sm:flex-row">
        <h2 class="mr-auto text-lg font-medium">{{ __('Citizen Details') }}</h2>
        <div class="mt-4 flex w-full sm:mt-0 sm:w-auto">
            <x-base.button
                class="mr-2 shadow-md ml-auto sm:ml-0"
                variant="primary"
                href="{{ route('citizens.edit', $citizen) }}"
                as="a"
                >
                <x-base.lucide
                        class="mr-2 h-4 w-4"
                        icon="edit"
                    /> {{ __('Update') }}
            </x-base.button>
{{--            <x-base.button--}}
{{--                class="shadow-md sm:ml-0"--}}
{{--                variant="danger"--}}
{{--                data-tw-toggle="modal"--}}
{{--                data-tw-target="#delete-modal"--}}
{{--                href="#"--}}
{{--                as="a"--}}
{{--            >--}}
{{--                <x-base.lucide--}}
{{--                    class="mr-2 h-4 w-4"--}}
{{--                    icon="trash"--}}
{{--                /> {{ __('Delete') }}--}}
{{--            </x-base.button>--}}
            @if($citizen->address_verified === 3)
                <form action="{{ route('approve-address', ['id' => $citizen->id]) }}" method="POST">
                @csrf
                    <x-base.button
                        class="shadow-md sm:ml-0 mr-2"
                        variant="primary"
                        type="submit"
                        href="#"
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="check"
                        /> {{ __('Approve Address') }}
                    </x-base.button>
                </form>
                <form action="{{route('reject-address', ['id' => $citizen->id])}}" method="POST">
                    @csrf
                    <x-base.button
                        class="shadow-md sm:ml-0"
                        variant="primary"
                        type="submit"
                        href="#"
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="trash"
                        /> {{ __('Reject Address') }}
                    </x-base.button>

                </form>

            @endif

            @if($citizen->CC_verified === 3)
                <form action="{{ route('approve-citizen', ['id' => $citizen->id]) }}" method="POST">
                @csrf
                    <x-base.button
                        class="shadow-md sm:ml-0 mr-2"
                        variant="primary"
                        type="submit"
                        href="#"
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="check"
                        /> {{ __('Approve Citizen Card') }}
                    </x-base.button>
                </form>
                <form action="{{route('reject-citizen', ['id' => $citizen->id])}}" method="POST">
                    @csrf
                    <x-base.button
                        class="shadow-md sm:ml-0"
                        variant="primary"
                        type="submit"
                        href="#"
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="trash"
                        /> {{ __('Reject Citizen Card') }}
                    </x-base.button>

                </form>

            @endif
        </div>
    </div>
    <div class="intro-y box mt-3 p-5">
        <dl class="space-y-4">
            @include('citizens.show_fields')
        </dl>
    </div>
</x-app-layout>
