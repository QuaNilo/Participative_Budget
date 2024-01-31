<section class="container relative lg:mt-12">
    <div class="relative grid md:grid-cols-4 grid-cols-1 items-center mt-8 gap-[30px] z-1">
        <div class="counter-box text-center">
            <h1 class="lg:text-5xl text-4xl font-bold mb-2"><span class="counter-value" data-target="{{$proposalsCount}}">{{$proposalsCount / 4}}</span>+</h1>
            <h5 class="counter-head text-lg font-medium">Propostas</h5>
        </div><!--end counter box-->

        <div class="counter-box text-center">
            <h1 class="lg:text-5xl text-4xl font-bold mb-2"><span class="counter-value" data-target="{{$winnersCount}}">{{$winnersCount / 4}}</span>+</h1>
            <h5 class="counter-head text-lg font-medium">Projectos Vencedores</h5>
        </div><!--end counter box-->

        <div class="counter-box text-center">
            <h1 class="lg:text-5xl text-4xl font-bold mb-2"><span class="counter-value" data-target="{{$usersCount}}">{{$usersCount / 4}}</span>+</h1>
            <h5 class="counter-head text-lg font-medium">Cidadãos</h5>
        </div><!--end counter box-->

        <div class="counter-box text-center">
            <h1 class="lg:text-5xl text-4xl font-bold mb-2"><span class="counter-value" data-target="{{$votesCount}}">{{$votesCount / 4}}</span>+</h1>
            <h5 class="counter-head text-lg font-medium">Votos</h5>
        </div><!--end counter box-->
    </div>
</section>
