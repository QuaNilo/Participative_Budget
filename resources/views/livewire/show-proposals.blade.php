
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen selection:text-white text-black">
    <div>
{{--                GRID TO DISPLAY PROPOSALS--}}
        <div class="grid grid-cols-3 gap-10">
            @foreach($proposals as $proposal)
                <div class="border-2 border-gray-800 overflow-hidden">
                    {{$proposal}}
                </div>
            @endforeach
        </div>
    </div>
</div>
