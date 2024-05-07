<!-- Footer Start -->
<footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="py-[60px] px-0">
                    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                        <div class="lg:col-span-4 md:col-span-12">
                            <a href="{{ route('home') }}" class="text-[22px] focus:outline-none">
                                <img src="{{asset('assets-frontend/images/OP_blue_sm.png')}}" alt="">
                            </a>
                            <p class="mt-6 text-gray-300">{{ __('Unlock the power of AI with Embedding AI - Your all-in-one solution to interact, summarize, translate, and converse with any document format. From PDFs, images, and audio files to code, URLs, and more. Elevate your data interaction experience') }}</p>
                            <ul class="list-none mt-6">

                                <li class="inline"><a href="https://www.instagram.com/noop.pt/" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-primary dark:hover:border-primary hover:bg-primary dark:hover:bg-primary"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                                <li class="inline"><a href="https://www.facebook.com/noop.pt" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-primary dark:hover:border-primary hover:bg-primary dark:hover:bg-primary"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                <li class="inline"><a href="https://twitter.com/agencianoop" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-primary dark:hover:border-primary hover:bg-primary dark:hover:bg-primary"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                                <li class="inline"><a href="https://www.linkedin.com/company/noop" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-primary dark:hover:border-primary hover:bg-primary dark:hover:bg-primary"><i class="uil uil-linkedin" title="Linkedin"></i></a></li>

                            </ul><!--end icon-->
                        </div><!--end col-->

                        <div class="lg:block md:hidden lg:col-span-2">
                        </div>

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">{{ __('Usefull Links') }}</h5>
                            <ul class="list-none footer-list mt-6">
                                <li><a href="{{ route('login') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> {{ __('Login') }}</a></li>
{{--                                <li class="mt-[10px]"><a href="{{ route('home') }}#price" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> {{ __('Pricing') }}</a></li>--}}
                            </ul>
                        </div><!--end col-->

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">&nbsp;</h5>
                            <ul class="list-none footer-list mt-6">
                                <li><a href="{{ route('home.terms_of_service') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> {{ __('Terms of Services') }}</a></li>
                                <li class="mt-[10px]"><a href="{{ route('home.privacy_policy') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> {{ __('Privacy Policy') }}</a></li>
                                <li class="mt-[10px]"><a href="{{ route('home.cookies') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> {{ __('Cookies') }}</a></li>
                                @if(true)
                                    <li class="mt-[10px]"><a href="https://www.livroreclamacoes.pt/" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> {{ __('Complaints book') }}</a></li>
                                @endif
                            </ul>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div><!--end col-->
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="py-[30px] px-0 border-t border-slate-800">
        <div class="container text-center">
            <div class="grid md:grid-cols-2 items-center">
                <div class="ltr:md:text-left rtl:md:text-right text-center">
                    <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> {{ config('app.name', 'Laravel') }}. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://noop.pt/" target="_blank" class="text-reset">Noop</a>.</p>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </div>
</footer><!--end footer-->
<!-- Footer End -->


<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-primary text-white leading-9"><i class="uil uil-arrow-up"></i></a>
<!-- Back to top -->

<!-- Switcher -->
{{--<div class="fixed top-[30%] -right-2 z-50">--}}
{{--    <span class="relative inline-block rotate-90">--}}
{{--        <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" {{ \Illuminate\Support\Facades\Cookie::get('darkmode') === 'true' ? 'checked' : '' }}/>--}}
{{--        <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">--}}
{{--            <i class="uil uil-moon text-[20px] text-yellow-500"></i>--}}
{{--            <i class="uil uil-sun text-[20px] text-yellow-500"></i>--}}
{{--            <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>--}}
{{--        </label>--}}
{{--    </span>--}}
{{--</div>--}}
<!-- Switcher -->
