<div>
    <div class="container relative">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                @foreach($editions as $edition)
                    <?php
                        $winners = $edition->proposals->where('winner', 1)->count();
                    ?>
                    <x-frontend.edition.show-edition-card :edition="$edition" :winners="$winners"/>
                @endforeach
        </div>
    </div>
</div>
