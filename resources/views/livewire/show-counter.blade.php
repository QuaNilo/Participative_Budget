<section class="container relative lg:mt-12">
    <div class="flex justify-evenly space-x-7">
        <div class="flex-grow text-center shadow-md rounded p-1 bg-indigo-300/90 hover:bg-indigo-400/80 transition ease-in-out delay-50">
            <h1 class="lg:text-5xl text-4xl font-mono font-semibold"><span class="counter-value" data-target="{{$proposalsCount}}">{{$proposalsCount / 4}}</span>+</h1>
            <h5 class="counter-head text-lg font-medium">{{__('Proposals')}}</h5>
        </div><!--end counter box-->

        <div class="flex-grow text-center shadow-md rounded p-1 bg-indigo-400/90 hover:bg-indigo-500/80 transition ease-in-out delay-50">
            <h1 class="lg:text-5xl text-4xl font-mono font-semibold"><span class="counter-value" data-target="{{$winnersCount}}">{{$winnersCount / 4}}</span>+</h1>
            <h5 class="counter-head text-lg font-medium">{{__('Winning Proposals')}}</h5>
        </div><!--end counter box-->

        <div class="flex-grow text-center shadow-md rounded p-1 bg-indigo-500/90 hover:bg-indigo-600/80 transition ease-in-out delay-50">
            <h1 class="lg:text-5xl text-4xl font-mono font-semibold"><span class="counter-value" data-target="{{$usersCount}}">{{$usersCount / 4}}</span>+</h1>
            <h5 class="counter-head text-lg font-medium">{{__('Citizens')}}</h5>
        </div><!--end counter box-->

        <div class="flex-grow text-center shadow-md rounded p-1 bg-indigo-600/90 hover:bg-indigo-700/80 transition ease-in-out delay-50">
            <h1 class="lg:text-5xl text-4xl font-mono font-semibold"><span class="counter-value" data-target="{{$votesCount}}">{{$votesCount / 4}}</span>+</h1>
            <h5 class="counter-head text-lg font-medium">{{__('Votes')}}</h5>
        </div><!--end counter box-->
    </div>
</section>
