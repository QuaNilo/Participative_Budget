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
    <div class="">
        <section class="relative md:h-screen py-36 flex items-center bg-[url('../../../../public/assets-frontend/images/digital/bg01.jpg')] bg-no-repeat bg-cover ">
            <div class="absolute inset-0 bg-white/30 dark:bg-slate-900/60"></div>
            <div class="container relative z-1">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
                    <div class="lg:col-span-8 md:col-span-7 md:order-1 order-2">
                        <div class="md:me-6">
                            <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-black dark:text-white">{{__("Build the county of your")}} <br> <span class="text-indigo-600">{{__("Dreams")}}</span></h4>
{{--                            <p class="text-slate-900 dark:text-white/75 text-lg max-w-xl"></p>--}}

                            <div class="mt-6">
                                    <a href="#what" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2">{{__("Know more")}}</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->
            <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 mb-6">
                <livewire:show-counter/>
            </div>
        </section><!--end section-->
            <!-- End Hero -->
            <section id="what" class="relative md:py-24 pt-0 mt-0 bg-gray-50 dark:bg-slate-800">
                <div class="container relative">
                    <div class="grid grid-cols-1 pb-8 text-center">
                        <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">{{__("What is Participatory Budget")}}?</h3>

                        <p class="text-slate-400 max-w-xl mx-auto">{{__("It's a public policy tool to engage and increase public participation in local government decision-making by funding ideas generated and debated by the population. The Municipality of Lisbon was the first European capital to implement Participatory Budgeting in 2008, through Deliberation No. 506/CM/2008 approved at a City Council meeting, as published on July 9, 2008, in the 3rd supplement to Municipal Bulletin No. 751.")}}</p>
                    </div><!--end grid-->

                    <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center mt-10 gap-[30px]">
                        <div class="lg:col-span-5">
                            <img src="{{asset('assets-frontend/images/job/job.jpg')}}" alt="">
                        </div>
                        <div class="lg:col-span-7">
                            <div class="lg:ms-10">
                                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">{{__("Objectives")}}</h3>
                                <ul class="list-none text-slate-400 mt-4">
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> {{__("Incentivar o diálogo entre eleitos, técnicos municipais, cidadãos e a sociedade civil organizada, na procura das melhores soluções para os problemas tendo em conta os recursos disponíveis.")}}</li>
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> {{__("Contribuir para a educação cívica, permitindo aos cidadãos integrar as suas preocupações pessoais com o bem comum, compreender a complexidade dos problemas e desenvolver atitudes, competências e práticas de participação.")}}</li>
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> {{__("Adequar as políticas públicas municipais às necessidades e expectativas das pessoas, para melhorar a qualidade de vida na cidade.")}}</li>
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> {{__("Aumentar a transparência da atividade da Autarquia, o nível de responsabilização dos eleitos e da estrutura municipal, contribuindo para reforçar a qualidade da democracia.")}}</li>
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
                                <h5 class="mb-2 text-xl font-semibold">{{__("Como funciona o")}} <span class="text-indigo-600">{{__("OP")}}</span> ?</h5>
                                <p class="text-slate-400">{{__("Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts.")}}</p>
                            </div>
                        </div>

                        <div class="flex">
                            <i data-feather="help-circle" class="fea icon-ex-md text-indigo-600 me-3"></i>
                            <div class="flex-1">
                                <h5 class="mb-2 text-xl font-semibold">{{__("Qual é o processo para abrir uma conta ?")}} </h5>
                                <p class="text-slate-400">{{__("If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact")}}</p>
                            </div>
                        </div>

                        <div class="flex">
                            <i data-feather="help-circle" class="fea icon-ex-md text-indigo-600 me-3"></i>
                            <div class="flex-1">
                                <h5 class="mb-2 text-xl font-semibold">{{__("Como criar uma proposta ?")}} </h5>
                                <p class="text-slate-400">{{__("Furthermore, it is advantageous when the dummy text is relatively realistic so that the layout impression of the final publication is not compromised.")}}</p>
                            </div>
                        </div>

                        <div class="flex">
                            <i data-feather="help-circle" class="fea icon-ex-md text-indigo-600 me-3"></i>
                            <div class="flex-1">
                                <h5 class="mb-2 text-xl font-semibold">{{__("Como funciona o Calendario das propostas do ")}} <span class="text-indigo-600">{{__("OP")}}</span> ?</h5>
                                <p class="text-slate-400">{{__("Para saber mais sobre o calendario,")}} <a class=" text-indigo-600 hover:underline" href="{{route('calendar-page')}}">{{__("Clique aqui")}}</a></p>
                            </div>
                        </div>
                    </div><!--end grid-->
                </div><!--end container-->

                <div class="container relative md:mt-24 mt-16 md:mb-12">
                    <div class="grid grid-cols-1 text-center">
                        <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">{{__("Tem alguma questão?")}}</h3>

                        <p class="text-slate-400 max-w-xl mx-auto">{{__("Consulte os seguintes Links!")}}</p>

                        <div class="mt-6">
                            <a href="{{route('faq-page')}}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white text-xl rounded-md mt-4"><i class="uil uil-question-circle text-xl"></i> {{__("FAQ")}}</a>
                        </div>
                        <div class="mt-6">
                            <a href="{{route('calendar-page')}}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white text-xl rounded-md mt-4"><i class="uil uil-question-circle text-xl"></i> {{__("Calendario")}}</a>
                        </div>
                        <div class="mt-6">
                            <a href="{{route('rules-page')}}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white text-xl rounded-md mt-4"><i class="uil uil-question-circle text-xl"></i> {{__("Regulamento")}}</a>
                        </div>
                    </div><!--end grid-->
                </div><!--end container-->
            </section><!--end section-->


    </div>
</x-landing-layout>
