<?php
// include '../resources/css/_tailwind_frontend.css';
/*
 * @var $sectorsCollection App\Models\Sector[]|Illuminate\Database\Eloquent\Collection
 * @var $themesCollection App\Models\Theme[]|Illuminate\Database\Eloquent\Collection
 * @var $updatedPostsCollection App\Models\Post[]|Illuminate\Database\Eloquent\Collection
 */
view()->share('pageTitle', __('Homepage'));
view()->share('showBgEffect', true);
$home = \App\Models\Home::first();
$wallpaper = $home->getFirstMediaUrl('wallpaper');
?>
<x-landing-layout>
    <div>
        <section class="relative table w-full py-12 lg:py-24">
            <div class="container relative">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
                    <div class="md:col-span-7">
                        <div class="me-6">
                            <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-black dark:text-white">{{__("Build the county of your")}} <br> <span class="text-primary">{{__("Dreams")}}</span></h4>

                            <div class="mt-6">
                                <a href="#what" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-hover border-primary hover:border-primary-hover text-white rounded-md me-2 mt-2"><i class="uil uil-envelope"></i>
                                    {{__('Get Started')}}</a>
                                <a href="{{route('rules-page')}}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-primary border-primary text-primary hover:text-white rounded-md mt-2"><i class="uil uil-book-alt"></i> {{__('More Information')}}</a>
                            </div>
                        </div>
                    </div>

                    <div class="md:col-span-5">
                        <x-svg.city />
                    </div>
                </div>
            </div>
        </section>

        <section id="what" class="relative py-2 bg-gray-50">
            <div class="relative mb-8">
                <livewire:show-counter/>
            </div>
            <div class="container relative">
                <div class="grid grid-cols-1 pb-8 text-center">
                    @if($homeInfo = \App\Models\HomeInfo::first())
                        <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">{{$homeInfo->title}}?</h3>
                        <p class="text-slate-400 max-w-xl mx-auto">{{$homeInfo->content}}</p>
                    @else
                        <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">{{__("What is Participatory Budget")}}?</h3>
                        <p class="text-slate-400 max-w-xl mx-auto">{{__("It's a public policy tool to engage and increase public participation in local government decision-making by funding ideas generated and debated by the population. The Municipality of Lisbon was the first European capital to implement Participatory Budgeting in 2008, through Deliberation No. 506/CM/2008 approved at a City Council meeting, as published on July 9, 2008, in the 3rd supplement to Municipal Bulletin No. 751.")}}</p>
                    @endif

                </div><!--end grid-->

                <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center mt-10 gap-[30px]">
                    <div class="lg:col-span-5">
{{--                        <img src="{{asset('assets-frontend/images/job/job.jpg')}}" alt="">--}}
                        <x-svg.progress />
                    </div>
                    <div class="lg:col-span-7">
                        <div class="lg:ms-10">
                            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">{{__("Objectives")}}</h3>
                            <ul class="list-none text-slate-400 mt-4">
                            @if(\App\Models\HomeBulletPoints::exists())
                                <?php
                                    $homeBullets = \App\Models\HomeBulletPoints::get()
                                ?>
                                @foreach($homeBullets as $homeBullet)
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> {{$homeBullet->bullet_point}}</li>
                                @endforeach
                            @else
                                <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> {{__("Incentivar o diálogo entre eleitos, técnicos municipais, cidadãos e a sociedade civil organizada, na procura das melhores soluções para os problemas tendo em conta os recursos disponíveis.")}}</li>
                                <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> {{__("Contribuir para a educação cívica, permitindo aos cidadãos integrar as suas preocupações pessoais com o bem comum, compreender a complexidade dos problemas e desenvolver atitudes, competências e práticas de participação.")}}</li>
                                <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> {{__("Adequar as políticas públicas municipais às necessidades e expectativas das pessoas, para melhorar a qualidade de vida na cidade.")}}</li>
                                <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> {{__("Aumentar a transparência da atividade da Autarquia, o nível de responsabilização dos eleitos e da estrutura municipal, contribuindo para reforçar a qualidade da democracia.")}}</li>
                            @endif
                            </ul>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section>
        <div class="relative flex justify-center bg-gray-50 text-center pt-20">
            <a href="{{ route('propostas')}}" class="py-2 px-5 w-[450px] inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-primary border-primary text-primary hover:text-white rounded-md">{{__("Participa")}}</a>
        </div>
        <section>
            <div class="relative md:py-24 py-16 bg-gray-50 ">
                <div class="grid grid-cols-1 text-center">
                    <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">{{__("Tem alguma questão?")}}</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">{{__("Consulte os seguintes Links!")}}</p>
                    <div class="flex flex-row justify-evenly w-1/2 mx-auto">
                        <div class="mt-6">
                            <a href="{{route('faq-page')}}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-primary border-primary text-primary hover:text-white rounded-md"><i class="uil uil-question-circle text-xl"></i> {{__("FAQ")}}</a>
                        </div>
                        <div class="mt-6">
                            <a href="{{route('calendar-page')}}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-primary border-primary text-primary hover:text-white rounded-md"><i class="uil uil-question-circle text-xl"></i> {{__("Calendario")}}</a>
                        </div>
                        <div class="mt-6">
                            <a href="{{route('rules-page')}}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-primary border-primary text-primary hover:text-white rounded-md"><i class="uil uil-question-circle text-xl"></i> {{__("Regulamento")}}</a>
                        </div>
                        <div class="mt-6">
                            <a href="{{route('contact-us')}}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-primary border-primary text-primary hover:text-white rounded-md"><i class="uil uil-question-circle text-xl"></i> {{__("Contact us")}}</a>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section>
    </div>
</x-landing-layout>
