<div>
    <div class="mt-10 px-5">
        <div class="text-center text-lg font-medium">
            {{__('Review Citizen Documents')}}
        </div>
        <div class="mt-2 text-center text-slate-500">
            {{__('Make sure the citizen is registered in the local town hall.')}}
        </div>
    </div>
    <div class="mt-10 border-t border-slate-200/60 px-5 pt-10 dark:border-darkmode-400 sm:px-20">
        <div class="text-base font-medium">{{__('Citizen Information')}}</div>
        <div class="mt-5 grid grid-cols-12 gap-4 gap-y-5">
            <div class="intro-y col-span-12 sm:col-span-6">
                <x-base.form-label for="input-wizard-5">{{__('Name')}}</x-base.form-label>
                <x-base.form-input
                    id="input-wizard-5"
                    type="text"
                    placeholder="{{$citizen->user->name}}"
                    readonly
                />
            </div>
            <div class="intro-y col-span-12 sm:col-span-6">
                <x-base.form-label for="input-wizard-1">{{__('County')}}</x-base.form-label>
                <x-base.form-input
                    id="input-wizard-1"
                    type="text"
                    placeholder="{{$citizen->freguesia}}"
                    readonly
                />
            </div>
            <div class="intro-y col-span-12 sm:col-span-6">
                <x-base.form-label for="input-wizard-2">{{__('Account Creation Date')}}</x-base.form-label>
                <x-base.form-input
                    id="input-wizard-2"
                    type="text"
                    placeholder="{{$citizen->created_at}}"
                    readonly
                />
            </div>
            <div class="intro-y col-span-12 sm:col-span-6">
                <x-base.form-label for="input-wizard-5">{{__('Gender')}}</x-base.form-label>
                <x-base.form-input
                    id="input-wizard-5"
                    type="text"
                    placeholder="{{$citizen->genderLabel}}"
                    readonly
                />
            </div>
            <div class="intro-y col-span-12 sm:col-span-6">
                <x-base.form-label for="input-wizard-4">{{__('Account Last Updated at')}}</x-base.form-label>
                <x-base.form-input
                    id="input-wizard-4"
                    type="text"
                    placeholder="{{$citizen->updated_at}}"
                    readonly
                />
            </div>
            <div class="intro-y col-span-12 sm:col-span-6">
                <x-base.form-label for="input-wizard-5">{{__('Citizen Card')}}</x-base.form-label>
                <x-base.form-input
                    id="input-wizard-5"
                    type="text"
                    placeholder="{{$citizen->CC}}"
                    readonly
                />
            </div>
            <div x-data="{ downloaded: false}" class="intro-y col-span-12 mt-5 flex items-center justify-center sm:justify-end">
                <div>
                    <form action="{{route('download-files-citizen', $citizen)}}" method="POST">
                    @csrf
                        <button type="submit" @click="downloaded = true" class="intro-x w-8 h-8 sm:w-10 sm:h-10 flex flex-none items-center justify-center rounded-full bg-primary hover:bg-primary text-white ml-2 tooltip" title="Download Documents"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="share" data-lucide="share" class="lucide lucide-share w-3 h-3"><path d="M4 12v8a2 2 0 002 2h12a2 2 0 002-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>
                        </button>
                    </form>
                </div>
                <x-base.button
                    class="ml-2 w-24"
                    variant="primary"
                    @click="wizard = 'submit'"
                    x-bind:disabled="downloaded == false"
                >
                    Next
                </x-base.button>
            </div>
        </div>
    </div>
</div>
