@props(['setting', 'wallpaper'])
<x-landing-layout>
     <!-- Start Hero -->
        <section class="md:h-screen flex py-36 w-full items-center bg-gray-100 bg-center bg-no-repeat bg-cover" style="background-image: url('{{$wallpaper}}');">
            <div class="absolute inset-0 bg-black/70"></div>
            <div class="container relative">
                <div class="lg:flex justify-center mt-12">
                    <div class="lg:w-11/12 bg-white dark:bg-slate-900 rounded-md shadow-lg dark:shadow-gray-800 overflow-hidden">
                        <div class="grid md:grid-cols-12 grid-cols-1 items-center">
                            <div class="lg:col-span-7 md:col-span-6">
                                <div class="w-full leading-[0] border-0">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1831.4946466274528!2d-8.467555834259475!3d39.464933011361474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd18626225bc5ec7%3A0xa9b7294d2fd55230!2sMunic%C3%ADpio%20do%20Entroncamento!5e0!3m2!1spt-PT!2spt!4v1711062977583!5m2!1spt-PT!2spt" style="border:0" class="w-full lg:h-[540px] md:h-[600px] h-[200px]" allowfullscreen></iframe>
                                </div>
                            </div>

                            <div class="lg:col-span-5 md:col-span-6">
                                <div class="p-6">
                                    <h3 class="mb-6 text-2xl leading-normal font-medium">{{__('Contactos Câmara Municipal')}} {{$setting->nome_cm}}</h3>
                                    <p class="text-slate-400">{{__('Pode entrar em contacto com a câmara municipal pelas seguintes formas.')}}</p>

                                    <div class="flex items-center mt-6">
                                        <i data-feather="mail" class="w-6 h-6 me-4"></i>
                                        <div class="">
                                            <h5 class="title font-bold mb-0">{{__('Email')}}</h5>
                                            <a href="mailto:contact@example.com" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-primary hover:text-primary-hover after:bg-primary duration-500 ease-in-out">{{$setting->email_cm}}</a>
                                        </div>
                                    </div>

                                    <div class="flex items-center mt-6">
                                        <i data-feather="phone" class="w-6 h-6 me-4"></i>
                                        <div class="">
                                            <h5 class="title font-bold mb-0">{{__('Phone')}}</h5>
                                            <a href="tel:+152534-468-854" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-primary hover:text-primary-hover after:bg-primary duration-500 ease-in-out">{{$setting->telephone_cm}}</a>
                                        </div>
                                    </div>

                                    <div class="flex items-center mt-6">
                                        <i data-feather="map-pin" class="w-6 h-6 me-4"></i>
                                        <div class="">
                                            <h5 class="title font-bold mb-0">{{__('Location')}}</h5>
                                            <a href="https://maps.app.goo.gl/AKXfTDvrysEJ69qP9" target=_blank data-type="iframe" class="video-play-icon relative inline-block font-semibold tracking-wide align-middle ease-in-out text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-primary hover:text-primary-hover after:bg-primary duration-500 lightbox">{{__('View on Google Maps')}}</a>
                                        </div>
                                    </div>

                                    <ul class="list-none mt-6">
                                        <li class="inline"><a href="{{$setting->facebook}}" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-primary hover:text-white hover:bg-primary"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="{{$setting->instagram}}" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-primary hover:text-white hover:bg-primary"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="{{$setting->twitter}}" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-primary hover:text-white hover:bg-primary"><i data-feather="twitter" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="{{$setting->linkedin}}" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-primary hover:text-white hover:bg-primary"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="{{$setting->facebook}}" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-primary hover:text-white hover:bg-primary"><i data-feather="github" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="{{$setting->youtube}}" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-primary hover:text-white hover:bg-primary"><i data-feather="youtube" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="{{$setting->facebook}}" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-primary hover:text-white hover:bg-primary"><i data-feather="gitlab" class="h-4 w-4"></i></a></li>
                                    </ul><!--end icon-->
                                </div>
                                <x-designed-by/>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

</x-landing-layout>
