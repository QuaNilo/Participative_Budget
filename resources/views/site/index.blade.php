<?php
// include '../resources/css/_tailwind_frontend.css';
/*
 * @var $sectorsCollection App\Models\Sector[]|Illuminate\Database\Eloquent\Collection
 * @var $themesCollection App\Models\Theme[]|Illuminate\Database\Eloquent\Collection
 * @var $updatedPostsCollection App\Models\Post[]|Illuminate\Database\Eloquent\Collection
 */
view()->share('pageTitle', __('Homepage'));
view()->share('showBgEffect', true);
?>
<x-landing-layout>


    <div class="mt-20">
                <!-- Start Hero -->
{{--            <section class="relative table w-full pt-24 lg:py-44">--}}
{{--                <div class="container relative">--}}
{{--                    <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">--}}
{{--                        <div class="md:col-span-7">--}}
{{--                            <div class="me-6">--}}
{{--                                <h4 class="font-semibold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-black dark:text-white">A sua participação é o nosso<span class="text-indigo-600"> Sucesso</span></h4>--}}
{{--                                <p class="text-slate-400 text-lg max-w-xl">Muito mais do que um voto.</p>--}}

{{--                                <div class="mt-6">--}}
{{--                                    <a href="#what" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2">Saiba Mais</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!--end col-->--}}

{{--                        <div class="md:col-span-5">--}}
{{--                            <img src="{{asset('assets-frontend/illustrator/Startup_SVG.svg')}}" alt="">--}}
{{--                        </div><!--end col-->--}}
{{--                    </div><!--end grid-->--}}
{{--                </div><!--end container-->--}}
{{--            </section><!--end section-->--}}


        <section class="relative md:h-screen py-36 flex items-center bg-[url('../../../../public/assets-frontend/images/digital/bg01.jpg')]">
            <div class="absolute inset-0 bg-white/30 dark:bg-slate-900/60"></div>
            <div class="container relative z-1">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
                    <div class="lg:col-span-8 md:col-span-7 md:order-1 order-2">
                        <div class="md:me-6">
                            <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-black dark:text-white">Constroi a tua freguesia <br> de <span class="text-indigo-600">Sonho</span></h4>
                            <p class="text-slate-900 dark:text-white/75 text-lg max-w-xl">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>

                            <div class="mt-6">
                                    <a href="#what" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2">Saiba Mais</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
            <!-- End Hero -->
            <livewire:show-counter/>
            <section id="what" class="relative md:py-24 py-24 mt-24 bg-gray-50 dark:bg-slate-800">
                <div class="container relative">
                    <div class="grid grid-cols-1 pb-8 text-center">
                        <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">O que é o Orçamento Participativo ?</h3>

                        <p class="text-slate-400 max-w-xl mx-auto">É uma ferramenta de política pública para envolver e aumentar a participação da população nas tomadas de decisão governativas locais, através do financiamento de ideias dos cidadãos geradas e debatidas pela população. O Município de Lisboa foi a primeira capital europeia a implementar o Orçamento Participativo em 2008, mediante a Deliberação n. º506/CM/2008 aprovada em reunião de Câmara, conforme publicada em 9 de julho de 2008, no 3.º suplemento ao Boletim Municipal n.º 751.</p>
                    </div><!--end grid-->

                    <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center mt-10 gap-[30px]">
                        <div class="lg:col-span-5">
                            <img src="{{asset('assets-frontend/images/job/job.jpg')}}" alt="">
                        </div>
                        <div class="lg:col-span-7">
                            <div class="lg:ms-10">
                                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Objetivos</h3>
                                <ul class="list-none text-slate-400 mt-4">
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Incentivar o diálogo entre eleitos, técnicos municipais, cidadãos e a sociedade civil organizada, na procura das melhores soluções para os problemas tendo em conta os recursos disponíveis.</li>
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Contribuir para a educação cívica, permitindo aos cidadãos integrar as suas preocupações pessoais com o bem comum, compreender a complexidade dos problemas e desenvolver atitudes, competências e práticas de participação.</li>
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Adequar as políticas públicas municipais às necessidades e expectativas das pessoas, para melhorar a qualidade de vida na cidade.</li>
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Aumentar a transparência da atividade da Autarquia, o nível de responsabilização dos eleitos e da estrutura municipal, contribuindo para reforçar a qualidade da democracia.</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end grid-->
                </div><!--end container-->
            </section>

    <!-- Start -->
            <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
                <div class="container relative">
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-[30px]">
                        <div class="flex">
                            <i data-feather="help-circle" class="fea icon-ex-md text-indigo-600 me-3"></i>
                            <div class="flex-1">
                                <h5 class="mb-2 text-xl font-semibold">Como funciona o <span class="text-indigo-600">OP</span> ?</h5>
                                <p class="text-slate-400">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts.</p>
                            </div>
                        </div>

                        <div class="flex">
                            <i data-feather="help-circle" class="fea icon-ex-md text-indigo-600 me-3"></i>
                            <div class="flex-1">
                                <h5 class="mb-2 text-xl font-semibold"> Qual é o processo para abrir uma conta ?</h5>
                                <p class="text-slate-400">If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact</p>
                            </div>
                        </div>

                        <div class="flex">
                            <i data-feather="help-circle" class="fea icon-ex-md text-indigo-600 me-3"></i>
                            <div class="flex-1">
                                <h5 class="mb-2 text-xl font-semibold"> Como criar uma proposta ?</h5>
                                <p class="text-slate-400">Furthermore, it is advantageous when the dummy text is relatively realistic so that the layout impression of the final publication is not compromised.</p>
                            </div>
                        </div>

                        <div class="flex">
                            <i data-feather="help-circle" class="fea icon-ex-md text-indigo-600 me-3"></i>
                            <div class="flex-1">
                                <h5 class="mb-2 text-xl font-semibold"> Como funciona o Calendario das propostas do <span class="text-indigo-600">OP</span> ?</h5>
                                <p class="text-slate-400">Para saber mais sobre o calendario, <a class=" text-indigo-600 hover:underline" href="{{route('calendar-page')}}">clique aqui</a></p>
                            </div>
                        </div>
                    </div><!--end grid-->
                </div><!--end container-->

                <div class="container relative md:mt-24 mt-16 md:mb-12">
                    <div class="grid grid-cols-1 text-center">
                        <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Tem alguma questão?</h3>

                        <p class="text-slate-400 max-w-xl mx-auto">Consulte os seguintes Links!</p>

                        <div class="mt-6">
                            <a href="{{route('faq-page')}}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white text-xl rounded-md mt-4"><i class="uil uil-question-circle text-xl"></i> FAQ</a>
                        </div>
                        <div class="mt-6">
                            <a href="{{route('calendar-page')}}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white text-xl rounded-md mt-4"><i class="uil uil-question-circle text-xl"></i> Calendario</a>
                        </div>
                        <div class="mt-6">
                            <a href="{{route('rules-page')}}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white text-xl rounded-md mt-4"><i class="uil uil-question-circle text-xl"></i> Regulamento</a>
                        </div>
                    </div><!--end grid-->
                </div><!--end container-->
            </section><!--end section-->


    </div>
</x-landing-layout>
