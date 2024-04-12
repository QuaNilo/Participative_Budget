@props(['hasVotes', 'HasProposals', 'tab'])
<x-landing-layout>
    <section class="relative md:py-24">
        <div class="flex space-x-4 p-6">
            <livewire:dashboard-navbar :tab="$tab"/>
            <div class="flex-grow flex-col">
                <div class="">
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
                        <livewire:profile.update-password-form/>
                    @endif

                </div>
            </div>
        </div><!--end container-->
    </section><!--end section-->

</x-landing-layout>
