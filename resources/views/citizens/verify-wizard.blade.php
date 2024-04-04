@props(['citizen'])
<x-app-layout>
    <div >
        <div class="mt-8 flex items-center">
            <h2 class="intro-y mr-auto text-lg font-medium">{{__('Citizen Verification')}}</h2>
        </div>
        <!-- BEGIN: Wizard Layout -->
        <div x-data="{ wizard: 'review'}" class="intro-y box mt-5 py-10 sm:py-20">
            <div class="flex justify-center">
                <x-base.button
                    class="intro-y mx-2 h-10 w-10 rounded-full"
                    x-bind:class="{'bg-primary text-white': wizard === 'review', 'bg-secondary': wizard === 'submit'}"
                >
                    1
                </x-base.button>
                <x-base.button
                    class="intro-y mx-2 h-10 w-10 rounded-full"
                    x-bind:class="{'bg-primary text-white': wizard === 'submit', 'bg-secondary': wizard === 'review'}"
                >
                    2
                </x-base.button>
            </div>
            <div x-show="wizard == 'review'">
                <x-citizen-card-review :citizen="$citizen"/>
            </div>
            <div x-show="wizard == 'submit'">
                <x-citizen-card-submit :citizen="$citizen" />
            </div>
        </div>
    </div>

</x-app-layout>
