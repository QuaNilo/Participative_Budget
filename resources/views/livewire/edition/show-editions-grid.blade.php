<div>
    <div class="relative">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            @foreach($editions as $edition)
                <x-frontend.edition.show-edition-card :edition="$edition" />
            @endforeach
        </div>
        @if(count($editions) === 0)
            <div class="flex justify-center items-center">
                <x-frontend.no-data-cow :message="__('No Previous Editions Found')" />
            </div>
        @endif
    </div>
</div>
