<section class="container relative lg:mt-12">
    <div class="flex justify-evenly space-x-7">
        <div class="flex-grow py-1 shadow-md font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-primary border-primary text-primary hover:text-white rounded-md">
            <h1 class="lg:text-5xl text-4xl font-mono font-semibold"><span class="counter-value" data-target="{{$proposalsCount}}">{{$proposalsCount / 4}}</span>+</h1>
            <h5 class="counter-head text-lg font-medium">{{__('Proposals')}}</h5>
        </div>

        <div class="flex-grow shadow-md font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-primary border-primary text-primary hover:text-white rounded-md">
            <h1 class="lg:text-5xl text-4xl font-mono font-semibold"><span class="counter-value" data-target="{{$winnersCount}}">{{$winnersCount / 4}}</span>+</h1>
            <h5 class="counter-head text-lg font-medium">{{__('Winning Proposals')}}</h5>
        </div>

        <div class="flex-grow shadow-md font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-primary border-primary text-primary hover:text-white rounded-md">
            <h1 class="lg:text-5xl text-4xl font-mono font-semibold"><span class="counter-value" data-target="{{$usersCount}}">{{$usersCount / 4}}</span>+</h1>
            <h5 class="counter-head text-lg font-medium">{{__('Citizens')}}</h5>
        </div>

        <div class="flex-grow shadow-md font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-primary border-primary text-primary hover:text-white rounded-md">
            <h1 class="lg:text-5xl text-4xl font-mono font-semibold"><span class="counter-value" data-target="{{$votesCount}}">{{$votesCount / 4}}</span>+</h1>
            <h5 class="counter-head text-lg font-medium">{{__('Votes')}}</h5>
        </div>
    </div>
</section>
