@props(['proposal'])
<x-landing-layout>
{{--        <section class="relative md:py-24 py-16">--}}
{{--            <div class="rounded-md shadow-xl mx-32">--}}
{{--                <div class="container w-1/3 h-1/3">--}}
{{--                    <div class="grid grid-cols-1">--}}
{{--                        <div class="tiny-single-item">--}}
{{--                            @foreach($proposal->getMedia('cover') as $media)--}}
{{--                                <div>--}}
{{--                                    <div class="m-2">--}}
{{--                                        <img src="{{ $media->getUrl() }}" class="rounded-md shadow dark:shadow-gray-800" alt="{{ $media->name }}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="container relative md:mt-24 mt-16">--}}
{{--                    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">--}}
{{--                        <div class="lg:col-span-4 md:col-span-5">--}}
{{--                            <div class="bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 p-6 rounded-md">--}}
{{--                                <h5 class="text-lg font-semibold border-b border-gray-100 dark:border-gray-700 pb-3 mb-3">Informações da proposta :</h5>--}}

{{--                                <div class="overflow-hidden">--}}
{{--                                    Location :--}}
{{--                                    <x-frontend.show-map-mini :width="450" :height="300" :lng="$proposal->lng" :lat="$proposal->lat"/>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            @auth--}}
{{--                                <livewire:voting :proposal_id="$proposal->id"/>--}}
{{--                            @else--}}
{{--                                Login to Vote!--}}
{{--                                <a href="{{ route('login') }}" class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white"><i data-feather="log-in" class="h-4 w-4"></i></a>--}}
{{--                            @endauth--}}
{{--                        </div><!--end col-->--}}

{{--                        <div class="lg:col-span-8 md:col-span-7">--}}
{{--                            <div class="lg:me-5">--}}
{{--                                <h4 class="text-xl font-semibold mb-3 border-b border-gray-100 dark:border-gray-700 pb-3">{{$proposal->title}} :</h4>--}}
{{--                                <p class="text-slate-400">{{$proposal->content}}</p>--}}
{{--                            </div>--}}
{{--                        </div><!--end col-->--}}
{{--                    </div><!--end grid-->--}}
{{--                </div><!--end container-->--}}
{{--            </div>--}}
{{--        </section><!--end section-->--}}
{{--        <!-- End Section-->--}}

    <section class="relative md:py-24 py-16">
            <div class="container">
                <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] items-center border border-gray-100">
                    <div class="lg:col-span-5 md:col-span-6">
                        <div class="tiny-single-item border border-gray-100">
                        @foreach($proposal->getMedia('cover') as $media)
                            <div class="tiny-slide">
                                <img src="{{ $media->getUrl() }}" class="rounded-md shadow dark:shadow-gray-800" alt="">
                            </div><!--end content-->
                        @endforeach
                        </div><!--end tiny slider-->
                    </div><!--end col-->

                    <div class="lg:col-span-7 md:col-span-6">
                        <div class="lg:ms-6 shadow shadow-md bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 p-6 ">
                            @if($proposal->winner)
                                <h5 class="text-2xl font-bold">{{$proposal->title}}</h5>
                                <h4 class="text-xl font-semibold text-amber-400">Projecto Vencedor<i class="mdi mdi-crown-outline text-amber-400 ml-2"></i></h4>
                            @else
                                <h5 class="text-2xl font-bold">{{$proposal->title}}</h5>

                            @endif

                            <div class="mt-4 ">
                                <h5 class="text-lg font-semibold">Autor :</h5>

                                <dl class="grid grid-cols-12 mb-0">
                                    <dt class="md:col-span-3 col-span-4 mt-2">Autor :</dt>
                                    <dd class="md:col-span-7 col-span-6 mt-2 text-slate-400">{{$proposal->user->name}}</dd>
                                    <dt class="md:col-span-3 col-span-4 mt-2">Category :</dt>
                                    <dd class="md:col-span-7 col-span-6 mt-2 text-slate-400">{{$proposal->category->name}}</dd>
                                </dl>
                            </div>
                        </div>
                            <div class="mt-4 ml-6">
                                @auth
                                <livewire:voting :proposal_id="$proposal->id"/>
                            @else
                                Login to Vote!
                                <a href="{{ route('login') }}" class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white"><i data-feather="log-in" class="h-4 w-4"></i></a>
                            @endauth
                            </div>
                    </div>
                </div><!--end grid-->

                <div class="grid md:grid-cols-12 grid-cols-1 mt-10 gap-[30px] border border-gray-100 shadow shadow-xl">
                    <div class="lg:col-span-3 md:col-span-5 ">
                        <div class="sticky top-20 ">
                            <ul class="flex-column p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                                <li role="presentation">
                                    <button class="px-4 py-2 text-start text-base font-semibold rounded-md w-full hover:text-indigo-600 duration-500" id="description-tab" data-tabs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                                </li>
                                <li role="presentation">
                                    <button class="px-4 py-2 text-start text-base font-semibold rounded-md w-full mt-3 duration-500" id="addinfo-tab" data-tabs-target="#addinfo" type="button" role="tab" aria-controls="addinfo" aria-selected="false">Informações adicionais</button>
                                </li>
                                <li role="presentation">
                                    <button class="px-4 py-2 text-start text-base font-semibold rounded-md w-full mt-3 duration-500" id="review-tab" data-tabs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Localização</button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="lg:col-span-9 md:col-span-7 border border border-gray-100">
                        <div id="myTabContent" class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md  border border-gray-100 ">
                            <div class="" id="description" role="tabpanel" aria-labelledby="profile-tab">
                                <p class="text-slate-400">{{$proposal->content}}</p>
                            </div>

                            <div class="hidden" id="addinfo" role="tabpanel" aria-labelledby="addinfo-tab">
                                <table class="w-full text-start">
                                    <tbody>
                                        <tr class="bg-white dark:bg-slate-900 border-b border-gray-100 dark:border-gray-700">
                                            <td class="font-semibold py-4" style="width: 100px;">Vencedor</td>
                                            <td class="text-slate-400 py-4">{{$proposal->winner == 1 ? 'Sim' : 'Não'}}</td>
                                        </tr>
                                        <tr class="bg-white dark:bg-slate-900 border-b border-gray-100 dark:border-gray-700">
                                            <td class="font-semibold py-4" style="width: 100px;">Posição</td>
                                            <td class="text-slate-400 py-4">{{$proposal->rank ? : 'Não é vencedor' }}</td>
                                        </tr>
                                        <tr class="bg-white dark:bg-slate-900 border-b border-gray-100 dark:border-gray-700">
                                            <td class="font-semibold py-4" style="width: 100px;">Criação</td>
                                            <td class="text-slate-400 py-4">{{$proposal->created_at}}</td>
                                        </tr>

                                        <tr class="bg-white dark:bg-slate-900 border-b border-gray-100 dark:border-gray-700">
                                            <td class="font-semibold py-4">Edição</td>
                                            <td class="text-slate-400 py-4">{{$proposal->edition->identifier}}</td>
                                        </tr>

                                        <tr class="bg-white dark:bg-slate-900 border-b border-gray-100 dark:border-gray-700">
                                            <td class="font-semibold py-4">Orçamento</td>
                                            <td class="text-slate-400 py-4">{{$proposal->budget_estimate ? : 'N/A' }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="hidden" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <table class="w-full text-start">
                                    <tbody>
                                        <tr class="bg-white dark:bg-slate-900 border-b border-gray-100 dark:border-gray-700">
                                            <td class="font-semibold py-4" style="width: 100px;">Cidade</td>
                                            <td class="text-slate-400 py-4">{{$proposal->city ? : 'N/A'}}</td>
                                        </tr>
                                        <tr class="bg-white dark:bg-slate-900 border-b border-gray-100 dark:border-gray-700">
                                            <td class="font-semibold py-4" style="width: 100px;">Rua</td>
                                            <td class="text-slate-400 py-4">{{$proposal->street ? : 'N/A' }}</td>
                                        </tr>
                                        <tr class="bg-white dark:bg-slate-900 border-b border-gray-100 dark:border-gray-700">
                                            <td class="font-semibold py-4" style="width: 100px;">Codigo Postal</td>
                                            <td class="text-slate-400 py-4">{{$proposal->postal_code ? : 'N/A'}} </td>
                                        </tr>

                                        <tr class="bg-white dark:bg-slate-900 border-b border-gray-100 dark:border-gray-700">
                                            <td class="font-semibold py-4">Freguesia</td>
                                            <td class="text-slate-400 py-4">{{$proposal->freguesia ? : 'N/A'}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="overflow-hidden mt-4">
                                    <x-frontend.show-map-mini :width="1000" :height="200" :lng="$proposal->lng" :lat="$proposal->lat"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->
</x-landing-layout>
