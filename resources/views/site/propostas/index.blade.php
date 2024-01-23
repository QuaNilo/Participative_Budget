@props(['edition_id'])
<x-landing-layout>
        <div class="my-24">
            <x-frontend.propostas.show-proposals :edition_id="$edition_id"/>
        </div>
</x-landing-layout>
