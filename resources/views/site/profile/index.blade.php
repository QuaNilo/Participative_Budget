@props(['hasVotes', 'HasProposals', 'tab'])
<x-landing-layout>
    <section class="md:py-32">
        <div class="flex space-x-3 container">
            <livewire:dashboard-navbar :tab="$tab"/>
            <div class="flex-grow">
                @if($tab === 'proposals')
                    @if($hasProposals || $hasVotes)
                        <livewire:proposals-profile-component/>
                    @else
                        <x-frontend.no-data :message="__('No Proposals Found')"/>
                    @endif

                @elseif($tab === 'votes')
                    @if($hasProposals || $hasVotes)
                        <livewire:votos-profile-component/>
                    @else
                        <x-frontend.no-data :message="__('No Votes Found')"/>
                    @endif

                @elseif($tab === 'dashboard')
                    @if($hasProposals && $hasVotes)
                        <livewire:dashboard-profile/>
                    @else
                        <x-frontend.no-data :message="__('No Data Found')"/>
                    @endif

                @elseif($tab === 'details')
                    <livewire:profile-details/>
                @elseif($tab === 'password')
                    <div class="relative overflow-x-auto shadow rounded-md bg-white p-5">
                        <livewire:profile.update-password-form/>
                    </div>
                @endif

            </div>
        </div>
    </section><!--end section-->

</x-landing-layout>
