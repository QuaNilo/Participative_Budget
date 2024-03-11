@props(['themes', 'faqs'])
<x-landing-layout>
    <!-- Start Section-->
        <section class="relative md:py-24 py-16">
            <div class="container relative">
                <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                    <div class="lg:col-span-4 md:col-span-5">
                        <div class="rounded-md shadow dark:shadow-gray-800 p-6 sticky top-20">
                            <ul class="list-none sidebar-nav mb-0 py-0" id="navmenu-nav">
                                @foreach($themes as $theme)
                                    <li class="navbar-item p-0"><a href="#{{$theme->id}}" class="text-base font-medium navbar-link">{{$theme->theme}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="lg:col-span-8 md:col-span-7">
                        @foreach($themes as $theme)
                            <div class="mt-5" id="{{$theme->id}}">
                                <h5 class="text-2xl font-semibold">{{$theme->theme}}</h5>

                                <div id="accordion-collapseone" data-accordion="collapse" class="mt-6">
                                    @foreach($theme->faqs as $faq)
                                        <div class="relative shadow dark:shadow-gray-800 rounded-md overflow-hidden">
                                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-{{$faq->id}}">
                                                <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-{{$faq->id}}" aria-expanded="true" aria-controls="accordion-collapse-body-{{$faq->id}}">
                                                    <span>{{$faq->question}}</span>
                                                    <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </h2>
                                            <div id="accordion-collapse-body-{{$faq->id}}" class="hidden" aria-labelledby="accordion-collapse-heading-{{$faq->id}}">
                                                <div class="p-5">
                                                    <p class="text-slate-400 dark:text-gray-400">{{$faq->answer}}</p>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="container relative md:mt-24 mt-16">
                <div class="grid grid-cols-1 text-center">
                    <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">{{__("Have Question ? Get in touch!")}}</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">{{__("Pode entrar em contacto com a câmara municipal pelo seguinte e-mail ")}}</p>

                    <div class="mt-6">
                        <a href="helpcenter-support.html" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2"><i class="uil uil-phone"></i> {{__("Contact us")}}</a>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section>

        <!-- End Section-->
</x-landing-layout>
