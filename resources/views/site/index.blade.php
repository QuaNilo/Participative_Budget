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

    <!-- Start Hero -->
    <section class="relative table w-full py-36 lg:py-44 overflow-hidden">
        <div class="container relative">
            <div class="relative grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
                <div class="md:col-span-7">
                    <div class="md:me-6">
                        <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-black dark:text-white relative">Fast and clean help <br> <span class="after:absolute after:end-0 after:start-0 after:bottom-3 after:lg:h-3 after:h-2 after:w-auto after:rounded-md after:bg-indigo-600/30 relative text-indigo-600">Structure</span> your work</h4>
                        <p class="text-slate-400 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v3.x html page.</p>

                        <div class="relative mt-8">
                            <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2">Get Started</a>
                            <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i class="mdi mdi-play text-xl align-middle"></i></a><small class="text-sm font-semibold uppercase align-middle ms-2">Watch Now</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="md:col-span-5">
                    <div class="relative after:content-[''] after:absolute after:md:bottom-12 after:-bottom-20 lg:after:-start-0 md:after:-start-20 after:-start-24
                        after:bg-indigo-600 after:shadow-2xl after:shadow-indigo-600/40 after:-z-1 ltr:after:rotate-[130deg] rtl:after:-rotate-[130deg] after:w-[75rem] after:md:h-[55rem] after:h-[30rem] after:rounded-[20rem]">
                        <img src="/assets-frontend/images/laptop.png" class="lg:max-w-none md:max-w-md" alt="">
                    </div>
                </div><!--end col-->

                <div class="overflow-hidden after:content-[''] after:absolute after:h-32 after:w-32 after:bg-indigo-600/5 after:top-16 after:start-0  after:-z-1 after:rounded-3xl after:animate-[spin_10s_linear_infinite]"></div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Hero -->

    <!-- Business Partner -->
    <section class="py-6 border-t border-b border-gray-100 dark:border-gray-700">
        <div class="container relative">
            <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
                <div class="mx-auto py-4">
                    <img src="/assets-frontend/images/client/amazon.svg" class="h-6" alt="">
                </div>

                <div class="mx-auto py-4">
                    <img src="/assets-frontend/images/client/google.svg" class="h-6" alt="">
                </div>

                <div class="mx-auto py-4">
                    <img src="/assets-frontend/images/client/lenovo.svg" class="h-6" alt="">
                </div>

                <div class="mx-auto py-4">
                    <img src="/assets-frontend/images/client/paypal.svg" class="h-6" alt="">
                </div>

                <div class="mx-auto py-4">
                    <img src="/assets-frontend/images/client/shopify.svg" class="h-6" alt="">
                </div>

                <div class="mx-auto py-4">
                    <img src="/assets-frontend/images/client/spotify.svg" class="h-6" alt="">
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Business Partner -->

    <!-- Start -->
    <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="features">
        <div class="container relative">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Features</h3>

                <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-4 gap-[30px]">
                <!-- Content -->
                <div class="group relative lg:px-6 mt-4 duration-500 rounded-xl overflow-hidden text-center">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-28 w-28 fill-indigo-600/5 mx-auto rotate-[30deg]"></i>
                        <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-indigo-600 rounded-xl duration-500 text-3xl flex align-middle justify-center items-center">
                            <i class="uil uil-adjust-circle"></i>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="" class="text-xl font-medium hover:text-indigo-600 duration-500 ease-in-out">Grow Your Business</a>
                        <p class="text-slate-400 duration-500 mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                    </div>
                </div>
                <!-- Content -->

                <!-- Content -->
                <div class="group relative lg:px-6 mt-4 duration-500 rounded-xl overflow-hidden text-center">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-28 w-28 fill-indigo-600/5 mx-auto rotate-[30deg]"></i>
                        <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-indigo-600 rounded-xl duration-500 text-3xl flex align-middle justify-center items-center">
                            <i class="uil uil-circuit"></i>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="" class="text-xl font-medium hover:text-indigo-600 duration-500 ease-in-out">Drive More Sales</a>
                        <p class="text-slate-400 duration-500 mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                    </div>
                </div>
                <!-- Content -->

                <!-- Content -->
                <div class="group relative lg:px-6 mt-4 duration-500 rounded-xl overflow-hidden text-center">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-28 w-28 fill-indigo-600/5 mx-auto rotate-[30deg]"></i>
                        <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-indigo-600 rounded-xl duration-500 text-3xl flex align-middle justify-center items-center">
                            <i class="uil uil-fire"></i>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="" class="text-xl font-medium hover:text-indigo-600 duration-500 ease-in-out">Handled By Expert</a>
                        <p class="text-slate-400 duration-500 mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                    </div>
                </div>
                <!-- Content -->
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container relative md:mt-24 mt-16">
            <div class="grid md:grid-cols-2 grid-cols-1 items-center mt-16 gap-[30px]">
                <div class="relative">
                    <div class="md:me-10">
                        <img src="/assets-frontend/images/saas/about.jpg" class="rounded-lg shadow-md dark:shadow-gray-800" alt="">
                    </div>
                    <div class="absolute -bottom-10 end-0 p-6 rounded-lg shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 md:w-80 w-60">
                        <h5 class="text-lg font-semibold mb-3">Helpcenter Software</h5>
                        <p class="text-slate-400">If the distribution of letters and 'words' is random</p>
                        <div class="flex justify-between mt-3 mb-2">
                            <span class="text-slate-400">Work in progress</span>
                            <span class="text-slate-400">84%</span>
                        </div>
                        <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                            <div class="bg-indigo-600 h-[6px] rounded-full" style="width: 84%"></div>
                        </div>
                    </div>
                </div>

                <div class="lg:ms-8 mt-8 md:mt-0">
                    <h4 class="mb-4 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Manage all your tasks <br> on this one plateform</h4>
                    <p class="text-slate-400">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters visual impact.</p>

                    <div class="mt-4">
                        <a href="page-aboutus.html" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Find Out More <i class="uil uil-angle-right-b align-middle"></i></a>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->

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

    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <div class="grid grid-cols-1 pb-8 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Users Say</h3>

                <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
            </div><!--end grid-->

            <div class="grid grid-cols-1 mt-8">
                <div class="tiny-three-item wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <div class="tiny-slide text-center">
                        <div class="cursor-e-resize">
                            <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="/assets-frontend/images/client/01.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                                <h6 class="mt-2 font-semibold">Calvin Carlo</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center">
                        <div class="cursor-e-resize">
                            <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="/assets-frontend/images/client/02.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                                <h6 class="mt-2 font-semibold">Christa Smith</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center">
                        <div class="cursor-e-resize">
                            <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="/assets-frontend/images/client/03.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                                <h6 class="mt-2 font-semibold">Jemina CLone</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center">
                        <div class="cursor-e-resize">
                            <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="/assets-frontend/images/client/04.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                                <h6 class="mt-2 font-semibold">Smith Vodka</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center">
                        <div class="cursor-e-resize">
                            <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="/assets-frontend/images/client/05.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                                <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center">
                        <div class="cursor-e-resize">
                            <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="/assets-frontend/images/client/06.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                                <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Section-->

    <!-- Start -->
    <section class="relative md:py-24 py-16 md:pt-0 pt-0">
        <div class="container relative">
            <div class="grid grid-cols-1 justify-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                <div class="relative z-1">
                    <div class="grid grid-cols-1 md:text-start text-center justify-center">
                        <div class="relative">
                            <img src="/assets-frontend/images/saas/home.png" alt="">
                            <div class="absolute bottom-2/4 translate-y-2/4 start-0 end-0 text-center">
                                <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                                   class="lightbox h-20 w-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 dark:text-white">
                                    <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="content md:mt-8">
                        <div class="grid lg:grid-cols-12 grid-cols-1 md:text-start text-center justify-center">
                            <div class="lg:col-start-2 lg:col-span-10">
                                <div class="grid md:grid-cols-2 grid-cols-1 items-center">
                                    <div class="mt-8">
                                        <div class="section-title text-md-start">
                                            <h6 class="text-white/50 text-lg font-semibold">Get Free Trial</h6>
                                            <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-white mt-2">Get An Easy Start <br> With Techwind Now</h3>
                                        </div>
                                    </div>

                                    <div class="mt-8">
                                        <div class="section-title text-md-start">
                                            <p class="text-white/50 max-w-xl mx-auto mb-2">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                            <a href="" class="text-white">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row -->
        </div><!--end container-->

        <div class="absolute bottom-0 start-0 end-0 sm:h-2/3 h-4/5 bg-gradient-to-b from-indigo-500 to-indigo-600"></div>
    </section><!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center">
                <div class="lg:col-span-5 md:col-span-6">
                    <img src="/assets-frontend/images/illustrator/envelope.svg" class="mx-auto d-block" alt="">
                </div>

                <div class="lg:col-span-7 md:col-span-6">
                    <span class="bg-indigo-600/5 text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5">Mobile Apps</span>
                    <h4 class="md:text-3xl text-2xl lg:leading-normal leading-normal font-medium my-4">Available for your <br> Smartphones</h4>
                    <p class="text-slate-400 max-w-xl mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                    <div class="my-5">
                        <a href=""><img src="/assets-frontend/images/app/app.png" class="m-1 inline-block" alt=""></a>

                        <a href=""><img src="/assets-frontend/images/app/playstore.png" class="m-1 inline-block" alt=""></a>
                    </div>

                    <div class="inline-block">
                        <div class="pt-4 flex items-center border-t border-gray-100 dark:border-gray-700">
                            <i data-feather="smartphone" class="me-2 text-indigo-600 h-10 w-10"></i>
                            <div class="content">
                                <h6 class="text-base font-medium">Install app now on your cellphones</h6>
                                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Learn More <i class="uil uil-angle-right-b"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end gird-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
</x-landing-layout>
