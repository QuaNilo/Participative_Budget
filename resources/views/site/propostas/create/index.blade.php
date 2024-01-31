@props(['edition_id'])
<x-landing-layout>
        <div>
{{--            @if($errors->any())--}}
{{--                <div class="alert alert-danger">--}}
{{--                    <ul>--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                            <li>{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--           @endif--}}
        </div>
        <div class="my-24">
            <livewire:proposal-create-form :edition_id="$edition_id"></livewire:proposal-create-form>
        </div>
</x-landing-layout>
