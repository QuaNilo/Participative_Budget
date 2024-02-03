@props(['calendars'])
<x-landing-layout>
    <!-- Start -->
        <section class="relative mx-32 px-32 md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
            <div class="container relative">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Calendario</h6>
                    <h3 class="md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Calendario Orçamento Participativo</h3>

                </div><!--end grid-->

                <div class="grid grid-cols-1 mt-8">
                    <div class="relative after:content-[''] after:absolute after:top-0 md:after:end-0 md:after:start-0 after:w-px after:h-full md:after:m-auto after:border-s-2 after:border-dashed after:border-gray-200 dark:after:border-gray-700 ms-3 md:ms-0">
                        <!--Start content-->
                        @foreach($calendars as $calendar)
                            @if($loop->even)
                                <div class="mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
                                    <div class="grid md:grid-cols-2">
                                        <div class="text-start ms-8 relative md:order-2">
                                            <h5 class="my-2 font-semibold ">{{ $calendar->date }}.</h5>
                                        </div>

                                        <div class="ltr:float-left rtl:float-right md:text-end md:me-8 mt-6 md:mt-0 md:order-1">
                                            <h5 class="title mb-1 font-semibold text-2xl">{{ $calendar->text }}.</h5>
                                            <p class="mt-3 mb-0 text-slate-400">{{$calendar->description}}.</p>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
                                    <div class="grid md:grid-cols-2">
                                        <div class="md:text-end md:me-8 relative">
                                            <h1 class="my-2 font-semibold">{{ $calendar->date }}.</h1>
                                        </div>

                                        <div class="ltr:float-left rtl:float-right text-start ms-8 mt-6 md:mt-0">
                                            <h5 class="title mb-1 font-semibold text-2xl">{{ $calendar->text }}.</h5>
                                            <p class="mt-3 mb-0 text-slate-400">{{$calendar->description}}.</p>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        @endforeach
{{--                        <div class="ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">--}}
{{--                            <div class="grid md:grid-cols-2">--}}
{{--                                <div class="md:text-end md:me-8 relative">--}}
{{--                                    <h1 class="my-2 font-semibold">15 de Julho a 31 de Agosto.</h1>--}}
{{--                                </div>--}}

{{--                                <div class="ltr:float-left rtl:float-right text-start ms-8 mt-6 md:mt-0">--}}
{{--                                    <h5 class="title mb-1 font-semibold text-2xl">Apresentação de Propostas.</h5>--}}
{{--                                    <p class="mt-3 mb-0 text-slate-400">Cidadãos poderão apresentar propostas para a melhoria da cidade conforme as suas ideias, expetativas e necessidades.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--End content-->--}}

{{--                        <!--Start content-->--}}
{{--                        <div class="mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">--}}
{{--                            <div class="grid md:grid-cols-2">--}}
{{--                                <div class="text-start ms-8 relative md:order-2">--}}
{{--                                    <h5 class="my-2 font-semibold ">1 a 30 de Setembro.</h5>--}}
{{--                                </div>--}}

{{--                                <div class="ltr:float-left rtl:float-right md:text-end md:me-8 mt-6 md:mt-0 md:order-1">--}}
{{--                                    <h5 class="title mb-1 font-semibold text-2xl">Apreciação técnica das propostas.</h5>--}}
{{--                                    <p class="mt-3 mb-0 text-slate-400">Serviços da Camara Municipal transformam em projetos as propostas que cumprem as normas definidas em cada edição.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--End content-->--}}

{{--                        <!--Start content-->--}}
{{--                        <div class="mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">--}}
{{--                            <div class="grid md:grid-cols-2">--}}
{{--                                <div class="md:text-end md:me-8 relative">--}}
{{--                                    <h5 class="my-2 font-semibold ">1 a 8 de Outubro.</h5>--}}
{{--                                </div>--}}

{{--                                <div class="ltr:float-left rtl:float-right text-start ms-8 mt-6 md:mt-0">--}}
{{--                                    <h5 class="title mb-1 font-semibold text-2xl">Publicação dos resultados da análise técnica</h5>--}}
{{--                                    <p class="mt-3 mb-0 text-slate-400"></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--End content-->--}}

{{--                        <!--Start content-->--}}
{{--                        <div class="mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">--}}
{{--                            <div class="grid md:grid-cols-2">--}}
{{--                                <div class="text-start ms-8 relative md:order-2">--}}
{{--                                    <h5 class="my-2 font-semibold">9 a 20 de Outubro.</h5>--}}
{{--                                </div>--}}

{{--                                <div class="ltr:float-left rtl:float-right md:text-end md:me-8 mt-6 md:mt-0 md:order-1">--}}
{{--                                    <h5 class="title mb-1 font-semibold text-2xl">Período de reclamações e decisão sobre as reclamações.</h5>--}}
{{--                                    <p class="mt-3 mb-0 text-slate-400">Os Cidadãos poderão reclamar os resultados da análise técnica, seguindo-se um período de resposta dos serviços.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--End content-->--}}
{{--                        <div class="mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">--}}
{{--                            <div class="grid md:grid-cols-2">--}}
{{--                                <div class="md:text-end md:me-8 relative">--}}
{{--                                    <h5 class="my-2 font-semibold">21 a 31 de Outubro.</h5>--}}
{{--                                </div>--}}

{{--                                <div class="ltr:float-left rtl:float-right text-start ms-8 mt-6 md:mt-0">--}}
{{--                                    <h5 class="title mb-1 font-semibold text-2xl">Respostas às reclamações.</h5>--}}
{{--                                    <p class="mt-3 mb-0 text-slate-400">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">--}}
{{--                            <div class="grid md:grid-cols-2">--}}
{{--                                <div class="text-start ms-8 relative md:order-2">--}}
{{--                                    <h5 class="my-2 font-semibold">1 a 10 de Novembro.</h5>--}}
{{--                                </div>--}}

{{--                                <div class="ltr:float-left rtl:float-right md:text-end md:me-8 mt-6 md:mt-0 md:order-1">--}}
{{--                                    <h5 class="title mb-1 font-semibold text-2xl">Publicação da lista definitiva</h5>--}}
{{--                                    <p class="mt-3 mb-0 text-slate-400">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                                                <!--End content-->--}}
{{--                        <div class="mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">--}}
{{--                            <div class="grid md:grid-cols-2">--}}
{{--                                <div class="md:text-end md:me-8 relative">--}}
{{--                                    <h5 class="my-2 font-semibold">11 de Novembro a 15 de Dezembro.</h5>--}}
{{--                                </div>--}}

{{--                                <div class="ltr:float-left rtl:float-right text-start ms-8 mt-6 md:mt-0">--}}
{{--                                    <h5 class="title mb-1 font-semibold text-2xl">Votação das propostas.</h5>--}}
{{--                                    <p class="mt-3 mb-0 text-slate-400">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">--}}
{{--                            <div class="grid md:grid-cols-2">--}}
{{--                                <div class="text-start ms-8 relative md:order-2">--}}
{{--                                    <h5 class="my-2 font-semibold">Até 14 de Dezembro.</h5>--}}
{{--                                </div>--}}

{{--                                <div class="ltr:float-left rtl:float-right md:text-end md:me-8 mt-6 md:mt-0 md:order-1">--}}
{{--                                    <h5 class="title mb-1 font-semibold text-2xl">Registo no site do Orçamento Participativo para votação nos projetos.</h5>--}}
{{--                                    <p class="mt-3 mb-0 text-slate-400">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">--}}
{{--                            <div class="grid md:grid-cols-2">--}}
{{--                                <div class="md:text-end md:me-8 relative">--}}
{{--                                    <h5 class="my-2 font-semibold">16 a 31 de Dezembro.</h5>--}}
{{--                                </div>--}}

{{--                                <div class="ltr:float-left rtl:float-right text-start ms-8 mt-6 md:mt-0">--}}
{{--                                    <h5 class="title mb-1 font-semibold text-2xl">Apresentação pública dos projetos vencedores.</h5>--}}
{{--                                    <p class="mt-3 mb-0 text-slate-400">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->
</x-landing-layout>
