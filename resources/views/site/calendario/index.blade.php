@props(['calendars'])
<x-landing-layout>
    <!-- Start -->
    <div class="container">

        <section class="relative py-24">
            <div class="relative">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h6 class="text-primary text-sm font-bold uppercase mb-2">{{__('Calendar')}}</h6>
                    <h3 class="md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">{{__("Participative Budget's Calendar")}}</h3>

                </div><!--end grid-->
                @if($calendars->isNotEmpty())
                    <div class="grid grid-cols-1 mt-8">
                        <div class="relative after:content-[''] after:absolute after:top-0 md:after:end-0 md:after:start-0 after:w-px after:h-full md:after:m-auto after:border-s-2 after:border-dashed after:border-gray-200 dark:after:border-gray-700 ms-3 md:ms-0">
                            <!--Start content-->
                            @foreach($calendars as $calendar)
                                @if($loop->even)
                                    <div class="mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-primary md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
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
                                    <div class="ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-primary md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
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

                        </div>
                    </div><!--end grid-->
                @else
                    <h1>{{__('No Calendars Found')}}</h1>
                @endif
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->
    </div>
</x-landing-layout>
