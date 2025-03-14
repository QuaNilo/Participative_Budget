@props(['regulation'])
<x-landing-layout>
    <!-- Start Section-->
        <section class="relative md:py-24 py-16 ">
            <div class="container relative">
                <h6 class="text-primary text-center text-sm font-bold uppercase mb-2">{{__('Regulamento')}}</h6>
                @if(isset($regulation))
                    <div class="grid grid-cols-1 items-center gap-[30px]">
                        <h4 class="text-3xl font-semibold mb-4">{{$regulation->title}}</h4>

                        <div>
                            <p class="text-slate-400 text-base leading-8">{{$regulation->subtitle}}.</p>
                            <p class="text-slate-800 text-base leading-8 mt-2 dark:text-white">
                                {{$regulation->description ?? ""}}
                            </p>
                        </div>

                        <div>
                            <h4 class="text-xl font-semibold mb-4">{{__('Index')}}</h4>
                            <ul class="list-none mt-3">
                                @foreach($regulation->chapters as $chapter)
                                    <li class="flex mt-2">
                                        <i class="mdi mdi-arrow-right"></i>
                                        <div class="ms-2">
                                                <h6 class="font-semibold text-xl">{{__('Chapter')}} {{$chapter->title}}</h6>
                                                <p class="text-slate-400">{{$chapter->subtitle}}</p>
                                                <div  class="text-slate-800 text-base leading-8 mt-2">
                                                    @foreach($chapter->articles as $article)
                                                        <p><a class="hover:underline text-primary" href="#{{$article->id}}{{$article->chapter_id}}"><i class="mdi mdi-arrow-right"></i>{{$article->title}}</a></p>
                                                    @endforeach
                                                </div>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        @foreach($regulation->chapters as $chapter)
                            <div>
                                <h4 class="text-4xl font-semibold mb-4">{{__('Chapter')}} {{$chapter->title}}</h4>
                                <p class="text-slate-400">{{$chapter->description}}</p>
                                @foreach($chapter->articles as $article)
                                    <div id="{{$article->id}}{{$article->chapter_id}}" class="">
                                        <h6  class="text-lg font-semibold mb-4 mt-6">{{$article->title}} </h6>
                                        <div class="p-6 mt-6 rounded-md shadow bg-white">
                                            <p class="text-slate-800 text-base leading-8">{{$article->description}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach

                    </div>
                @else
                    <h1>{{__('No Regulation Found')}}</h1>
                @endif
            </div><!--grid-->
        </section><!--end section-->
        <!-- End Section-->
</x-landing-layout>
