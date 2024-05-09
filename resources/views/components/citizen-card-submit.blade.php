<div>
    <div class="mt-10 px-5">
        <div class="text-center text-lg font-medium">
            {{__('Submit your decision')}}
        </div>
    </div>
    <div class="flex justify-evenly mt-10 border-t border-slate-200/60 px-5 pt-10 dark:border-darkmode-400 sm:px-20">
        @if($citizen->CC_verified !== App\Models\Citizen::APPROVAL_STATUS_REJECTED)
            <div>
                <form action="{{route('citizens.reject_cc', $citizen)}}" method="POST">
                    @csrf
                    <x-base.button
                        class="shadow-md sm:ml-0 p-5"
                        variant="danger"
                        type="submit"
                        href="#"
                    >
                        <x-base.lucide
                            class="mr-2 h-5 w-5"
                            icon="trash"
                        /> {{ __('Reject Citizen Card') }}
                    </x-base.button>
                </form>
            </div>
        @endif
        @if($citizen->CC_verified !== App\Models\Citizen::APPROVAL_STATUS_ACCEPTED)
            <div>
                <form action="{{ route('citizens.approve_cc', $citizen) }}" method="POST">
                    @csrf
                    <x-base.button
                        class="shadow-md sm:ml-0 mr-2 p-5"
                        variant="primary"
                        type="submit"
                        href="#"
                    >
                        <x-base.lucide
                            class="mr-2 h-5 w-5"
                            icon="check"
                        /> {{ __('Approve Citizen Card') }}
                    </x-base.button>
                </form>
            </div>
        @endif
    </div>
    <div class="intro-y col-span-12 pr-10 mt-20 flex items-center justify-center sm:justify-end">
        <x-base.button
            class="ml-2 w-24"
            variant="secondary"
            @click="wizard = 'review'"
            x-bind:disabled="downloaded == false"
        >
           {{__('Previous')}}
        </x-base.button>
            <x-base.button
                class="ml-2 w-26"
                variant="primary"
            >
                <a href="{{route('dashboard')}}">
                    {{__('Home Page')}}
                </a>
            </x-base.button>
    </div>
</div>
