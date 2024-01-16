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
        <section class="relative table w-full py-36 lg:py-30">
            <div class="absolute inset-0" id="overlay"></div>
            <div class="absolute inset-0 ltr:md:bg-gradient-to-l rtl:md:bg-gradient-to-r md:from-transparent md:via-indigo-600/80 md:to-indigo-800"></div>
            <div class="container relative">
                <div class="grid grid-cols-1">
                    <div class="md:text-start text-center mt-10">
                        <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">Participe no seu<br> concelho</h1>
                        <p class="text-white/70 text-xl max-w-xl">Influencie o destino da sua terra</p>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

        <!-- Start -->
        <section class="relative">
            <div class="container relative">
                <div class="justify-center">
                    <div class="relative -mt-28">
                        <div class="flex p-6 bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800">
                            <div class="relative p-6 md:p-8">
                                <i class="mdi mdi-account-question-outline bg-gradient-to-tl to-indigo-600 from-red-600 text-transparent bg-clip-text text-[45px]"></i>

                                <h5 class="text-xl font-semibold my-5">Registe-se ou faça Login</h5>

                                <p class="text-slate-400">Verifique a sua identidade para sabermos que está apto a criar e a votar nas propostas do concelho.</p>

                                <i class="mdi mdi-account-question-outline absolute bottom-0 end-0 -z-1 opacity-5 text-9xl"></i>

                                <span class="uil uil-angle-right-b h-8 w-8 bg-indigo-600 text-white rounded-full flex justify-center items-center absolute md:top-2/4 md:-translate-y-2/4 -bottom-4 md:-end-0 end-2/4 ltr:translate-x-2/4 rtl:-translate-x-2/4 rtl:rotate-180 z-1"></span>
                            </div><!--end content-->

                            <div class="relative p-6 md:p-8">
                                <i class="mdi mdi-information-outline bg-gradient-to-tl to-indigo-600 from-red-600 text-transparent bg-clip-text text-[45px]"></i>

                                <h5 class="text-xl font-semibold my-5">Informe-se sobre o calendario de propostas</h5>

                                <p class="text-slate-400">Pode consultar o calendario e todas informações aqui <br> <a class="hover:text-indigo-600 font-bold " href="/{{ route('calendar-page') }}">Saiba mais</a></p>

                                <i class="mdi mdi-account-search-outline absolute bottom-0 end-0 -z-1 opacity-5 text-9xl"></i>

                                <span class="uil uil-angle-right-b h-8 w-8 bg-indigo-600 text-white rounded-full flex justify-center items-center absolute md:top-2/4 md:-translate-y-2/4 -bottom-4 md:-end-0 end-2/4 ltr:translate-x-2/4 rtl:-translate-x-2/4 rtl:rotate-180 z-1"></span>
                            </div><!--end content-->

                            <div class="relative p-6 md:p-8">
                                <i class="mdi mdi-vote-outline bg-gradient-to-tl to-indigo-600 from-red-600 text-transparent bg-clip-text text-[45px]"></i>

                                <h5 class="text-xl font-semibold my-5">Crie ou Participe em Propostas</h5>

                                <p class="text-slate-400">A participação em propostas criadas pela comunidade é muito facil.<br> Também pode criar as suas proprias propostas.</p>

                                <i class="mdi mdi-account-search-outline absolute bottom-0 end-0 -z-1 opacity-5 text-9xl"></i>

                                <span class="uil uil-angle-right-b h-8 w-8 bg-indigo-600 text-white rounded-full flex justify-center items-center absolute md:top-2/4 md:-translate-y-2/4 -bottom-4 md:-end-0 end-2/4 ltr:translate-x-2/4 rtl:-translate-x-2/4 rtl:rotate-180 z-1"></span>
                            </div><!--end content-->
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section>

        <div class="container relative md:mt-24 mt-16">
            <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                <div class="relative order-1 md:order-2">
                    <img src="/assets-frontend/images/saas/classic03.png" class="rounded-lg shadow-md dark:shadow-gray-800" alt="">
                </div>

                <div class="lg:me-8 order-2 md:order-1">
                    <h4 class="mb-4 text-2xl leading-normal font-medium">Get Notified About Importent Email</h4>
                    <p class="text-slate-400">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters visual impact.</p>
                    <ul class="list-none text-slate-400 mt-4">
                        <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Digital Marketing Solutions for Tomorrow</li>
                        <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Our Talented & Experienced Marketing Agency</li>
                        <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Create your own skin to match your brand</li>
                    </ul>

                    <div class="mt-4">
                        <a href="page-aboutus.html" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Find Out More <i class="uil uil-angle-right-b align-middle"></i></a>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- End  -->


</div>
</x-landing-layout>
