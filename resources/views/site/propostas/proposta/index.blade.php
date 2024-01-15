@props(['proposal'])
<x-landing-layout>
        <section class="relative md:py-24 py-16">
            <div class="container w-1/3 h-1/3">
                <div class="grid grid-cols-1">
                    <div class="tiny-single-item">
{{--                        @foreach($proposal->images as $images) --}}
{{--                            <div>--}}
{{--                                <div class="m-2">--}}
{{--                                    <img src="{{asset('images/no-image.svg')}}" class="rounded-md shadow dark:shadow-gray-800" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
                        <div>
                            <div class="m-2">
                                <img src="{{asset('images/no-image.svg')}}" class="rounded-md shadow dark:shadow-gray-800" alt="">
                            </div>
                        </div>
                        <div >
                            <div class="m-2">
                                <img src="{{asset('images/no-image.svg')}}" class="rounded-md shadow dark:shadow-gray-800" alt="">
                            </div>
                        </div>
                        <div >
                            <div class="m-2">
                                <img src="{{asset('images/no-image.svg')}}" class="rounded-md shadow dark:shadow-gray-800" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container relative md:mt-24 mt-16">
                <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                    <div class="lg:col-span-4 md:col-span-5">
                        <div class="bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 p-6 rounded-md">
                            <h5 class="text-lg font-semibold border-b border-gray-100 dark:border-gray-700 pb-3 mb-3">Informações da proposta :</h5>
                            <dl class="grid grid-cols-12 mb-0">
                                <dt class="md:col-span-4 col-span-5 mt-2">Autor :</dt>
                                <dd class="md:col-span-8 col-span-7 mt-2 text-slate-400">{{$proposal->user->name}}</dd>

                                <dt class="md:col-span-4 col-span-5 mt-2">Category :</dt>
                                <dd class="md:col-span-8 col-span-7 mt-2 text-slate-400">{{$proposal->category->name}}</dd>

                                <dt class="md:col-span-4 col-span-5 mt-2">Date :</dt>
                                <dd class="md:col-span-8 col-span-7 mt-2 text-slate-400">{{$proposal->created_at}}</dd>
                            </dl>
                            <div class="overflow-hidden">
                                Location :
                                <x-frontend.show-map-mini :width="450" :height="300" :lng="$proposal->coordinateX" :lat="$proposal->coordinateY"/>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="lg:col-span-8 md:col-span-7">
                        <div class="lg:me-5">
                            <h4 class="text-xl font-semibold mb-3 border-b border-gray-100 dark:border-gray-700 pb-3">{{$proposal->title}} :</h4>
                            <p class="text-slate-400">{{$proposal->content}}</p>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Section-->
</x-landing-layout>
