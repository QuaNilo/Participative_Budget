@props(['edition'])
<x-landing-layout>
        <div class="container my-24">
            <x-frontend.propostas.show-proposals :edition="$edition"/>
        </div>
</x-landing-layout>
