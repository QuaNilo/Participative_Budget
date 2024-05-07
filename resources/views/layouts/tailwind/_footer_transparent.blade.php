<!-- Footer Start -->
<?php
    $setting = \App\Models\Setting::first();
?>
<footer class="footer bg-transparent relative text-slate-400">
    <div class="container relative">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="py-[60px] px-0">
                    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                        <div class="lg:col-span-4 md:col-span-12">
                            <a href="{{ route('home') }}" class="text-[22px] focus:outline-none">
                                <img src="{{asset('assets-frontend/images/OP_blue_sm.png')}}" class="block dark:hidden w-10" alt="">
                            </a>
                            <p class="mt-6">{{ __('') }}</p>
                            <ul class="list mt-6">
                                @if($setting->facebook)
                                    <li class="inline"><a href="{{$setting->facebook}}" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center text-gray-400 hover:text-white border border-gray-100 dark:border-gray-800 rounded-md hover:border-primary dark:hover:border-primary hover:bg-primary dark:hover:bg-primary"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                @endif
                                @if($setting->twitter)
                                    <li class="inline"><a href="{{$setting->twitter}}" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center text-gray-400 hover:text-white border border-gray-100 dark:border-gray-800 rounded-md hover:border-primary dark:hover:border-primary hover:bg-primary dark:hover:bg-primary"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                                @endif
                                @if($setting->instagram)
                                    <li class="inline"><a href="{{$setting->instagram}}" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center text-gray-400 hover:text-white border border-gray-100 dark:border-gray-800 rounded-md hover:border-primary dark:hover:border-primary hover:bg-primary dark:hover:bg-primary"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                                @endif
                                @if($setting->linkedin)
                                    <li class="inline"><a href="{{$setting->linkedin}}" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center text-gray-400 hover:text-white border border-gray-100 dark:border-gray-800 rounded-md hover:border-primary dark:hover:border-primary hover:bg-primary dark:hover:bg-primary"><i class="uil uil-linkedin" title="Linkedin"></i></a></li>
                                @endif
                                @if($setting->youtube)
                                        <li class="inline"><a href="{{$setting->youtube}}" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center text-gray-400 hover:text-white border border-gray-100 dark:border-gray-800 rounded-md hover:border-primary dark:hover:border-primary hover:bg-primary dark:hover:bg-primary"><i class="uil uil-youtube align-middle" title="Youtube"></i></a></li>
                                @endif

                            </ul><!--end icon-->
                        </div><!--end col-->

                        <div class="lg:block md:hidden lg:col-span-2">
                        </div>

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-black dark:text-white font-semibold">{{ __('Useful Links') }}</h5>
                            <ul class="list-none footer-list mt-6">
                                <li><a href="{{ route('login') }}" class="text-slate-400 hover:text-slate-500 dark:text-slate-300 dark:hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> {{ __('Login') }}</a></li>
                                <li><a href="{{ route('register') }}" class="text-slate-400 hover:text-slate-500 dark:text-slate-300 dark:hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> {{ __('Register') }}</a></li>
                            </ul>
                        </div><!--end col-->

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">&nbsp;</h5>
                            <ul class="list-none footer-list mt-6">
{{--                                <li><a href="{{ route('home.terms_of_service') }}" class="text-slate-400 hover:text-slate-500 dark:text-slate-300 dark:hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> {{ __('Terms of Services') }}</a></li>--}}
                                <li class="mt-[10px]"><a href="{{ route('home.privacy_policy') }}" class="text-slate-400 hover:text-slate-500 dark:text-slate-300 dark:hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> {{ __('Privacy Policy') }}</a></li>
                                <li class="mt-[10px]"><a href="{{ route('home.cookies') }}" class="text-slate-400 hover:text-slate-500 dark:text-slate-300 dark:hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> {{ __('Cookies') }}</a></li>
                                @if(true)
                                    <li class="mt-[10px]"><a href="https://www.livroreclamacoes.pt/" class="text-slate-400 hover:text-slate-500 dark:text-slate-300 dark:hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> {{ __('Complaining book') }}</a></li>
                                @endif
                            </ul>
                        </div><!--end col-->
                        @if(true)
                            <div class="lg:col-span-3 md:col-span-4">
                                <h5 class="tracking-[1px] text-black dark:text-white font-semibold">{{ __('Town Hall') }}</h5>
                                <p class="mt-6">
                                    {{$setting->nome_cm}}<br>
                                    {{$setting->email_cm}}<br>
                                    {{$setting->address}}<br>
{{--                                    NIF: 515447650--}}
                                </p>
                                @if(false)
                                    <p class="mt-6">Sign up and receive the latest tips via email.</p>
                                    <form>
                                        <div class="grid grid-cols-1">
                                            <div class="my-3">
                                                <label class="form-label">Write your email <span class="text-red-600">*</span></label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="mail" class="w-4 h-4 absolute top-3 start-4"></i>
                                                    <input type="email" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0" placeholder="Email" name="email" required="">
                                                </div>
                                            </div>

                                            <button type="submit" id="submitsubscribe" name="send" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-indigo-700 border-primary hover:border-indigo-700 text-white rounded-md">Subscribe</button>
                                        </div>
                                    </form>
                                @endif
                            </div><!--end col-->
                        @endif
                    </div><!--end grid-->
                </div><!--end col-->
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <x-designed-by/>
</footer><!--end footer-->
<!-- Footer End -->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-primary text-white leading-9"><i class="uil uil-arrow-up"></i></a>
<!-- Back to top -->
