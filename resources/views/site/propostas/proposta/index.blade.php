@props(['proposal', 'WinnerValidEditionStatus'])
<x-landing-layout>
    <style>
    .tiny-single-item img {
        max-width: 1000px;
        height: auto;
        max-height: 400px;
    }
    </style>
    <div class="mt-28 grid grid-cols-12 gap-4">
        <div class="col-span-1"></div>
        <div class="col-span-3 flex-col justify-center items-center mt-28">
            <div class="p-6 flex flex-col items-start flex-1 shadow-lg rounded-xl">
                @if(in_array($proposal->edition->status, $WinnerValidEditionStatus))
                    <div class="text-slate-500 text-xs">{{__('Winner')}}</div>
                    <div class="mt-1.5 flex items-center">
                        <div class="text-base">{{$proposal->winner == 1 ? 'Sim' : 'Não'}}</div>
                    </div>
                    <div class="text-slate-500 text-xs mt-2">{{__('Position')}}</div>
                    <div class="mt-1.5 flex items-center">
                        <div class="text-base">{{$proposal->rank ? : 'Não é vencedor' }}</div>
                    </div>

                @endif
                <div class="text-slate-500 text-xs mt-2">{{__('Created at')}}</div>
                <div class="mt-1.5 flex items-center">
                    <div class="text-base">{{$proposal->created_at}}</div>
                </div>
                <div class="text-slate-500 text-xs mt-2">{{__('Edition')}}</div>
                <div class="mt-1.5 flex items-center">
                    <div class="text-base">{{$proposal->edition->identifier}}</div>
                </div>
                @if($proposal->budget_estimate)
                    <div class="text-slate-500 text-xs mt-2">{{__('Budget')}}</div>
                    <div class="mt-1.5 flex items-center">
                        <div class="text-base">{{$proposal->budget_estimate . ' €' }}</div>
                    </div>
                @endif
            </div>
            <div class="p-6 mt-8 flex flex-col items-start flex-1 shadow-lg rounded-xl">
                @if($proposal->city)
                    <div class="text-slate-500 text-xs">{{__('Cidade')}}</div>
                    <div class="mt-1.5 flex items-center">
                        <div class="text-base">{{$proposal->city ? : 'N/A'}}</div>
                    </div>
                @endif
                @if($proposal->street)
                    <div class="text-slate-500 text-xs mt-2">{{__('Street')}}</div>
                    <div class="mt-1.5 flex items-center">
                        <div class="text-base">{{$proposal->street }}</div>
                    </div>
                @endif
                @if($proposal->postal_code)
                    <div class="text-slate-500 text-xs mt-2">{{__('Postal Code')}}</div>
                    <div class="mt-1.5 flex items-center">
                        <div class="text-base">{{$proposal->postal_code}}</div>
                    </div>
                @endif
                @if($proposal->freguesia)
                    <div class="text-slate-500 text-xs mt-2">{{__('County')}}</div>
                    <div class="mt-1.5 flex items-center">
                        <div class="text-base">{{$proposal->freguesia}}</div>
                    </div>
                @endif
                @if($proposal->lng && $proposal->lat)
                    <div class="text-slate-500 text-xs mt-2 hidden xl:block">{{__('MAP')}}</div>
                    <div class="mt-1.5 flex items-center hidden xl:block">
                        <div class="overflow-hidden mt-2">
                            <x-frontend.show-map-mini :width="300" :height="300" :lng="$proposal->lng"
                                                      :lat="$proposal->lat"/>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-span-6 p-10 shadow-lg rounded-xl">
            <div class="flex-col">
                <!-- BEGIN: Blog Layout -->
                <h2 class="font-medium text-xl sm:text-2xl">
                    {{$proposal->edition->identifier}}
                </h2>
                <div class="text-slate-600 mt-3 text-xs sm:text-sm">
                    {{ \Carbon\Carbon::parse($proposal->created_at)->diffForHumans() }}
                    <span class="mx-1">•</span>
                    <span class="text-indigo-600" >{{$proposal->category->name}}</span>
                    <span class="mx-1">•</span>
                    <span class="" >{{$proposal->user->name}}</span>
                </div>
                <div class="w-full h-1/4 mt-4">
                <div class="tiny-single-item border border-gray-100">
{{--                    @if($proposal->getMedia('cover')->isNotEmpty())--}}
                        <div class="tiny-slide ">
                            <img src="{{ $proposal->getFirstMediaUrl('cover', 'retangular') }}"
        {{--                             style="width: 1000px; height: 400px;"--}}
                                 class="rounded-md shadow w-full h-full" alt="">
                        </div><!--end content-->
{{--                    @endif--}}
                    @if($proposal->getMedia('gallery')->isNotEmpty())
                        @if($proposal->getMedia('gallery')[0]->hasGeneratedConversion('retangular'))
                            @foreach($proposal->getMedia('gallery') as $media)
{{--                            @dd($media->getUrl('retangular'))--}}
                                <div class="tiny-slide">
                                    <img src="{{ $media->getUrl('retangular') }}"
                                         class="rounded-md shadow w-full h-full" alt="">
                                </div><!--end content-->
                            @endforeach
                        @else
                            @foreach($proposal->getMedia('gallery') as $media)
                                <div class="tiny-slide">
                                    <img src="{{ $media->getUrl() }}" class="rounded-md shadow object-cover w-full h-full"
                                         alt="">
                                </div><!--end content-->
                            @endforeach
                        @endif
                    @endif
                </div><!--end tiny slider-->
                </div>

                <div class=" flex  pt-16 sm:pt-6 items-center pb-6">
                    <div class="absolute sm:relative -mt-12 sm:mt-0 w-full flex text-slate-600 text-xs sm:text-sm">
                        <div class="intro-x mr-1 sm:mr-3"> Impressions:
                            <span class="font-medium">
                                {{$proposal->impressions}}
                            </span>
                        </div>
{{--                        <div class="intro-x sm:mr-3 ml-auto"> Votes: <span class="font-medium">{{$proposal->votes_count}}</span> </div>--}}
                    </div>
                    <div class="">
                        @if($proposal->edition->status === \App\Models\Edition::STATUS_VOTING)
                            @auth
                                <livewire:voting :proposal_id="$proposal->id"/>
                            @else
                                <div class="flex items-center">
                                    <span class="font-medium text-xs">{{__('Login to Vote')}}</span>

                                    <a href="{{ route('login') }}"
                                       class="intro-x w-8 h-8 sm:w-10 sm:h-10 flex flex-none items-center justify-center rounded-full bg-indigo-600 hover:bg-indigo-800 text-white ml-2 tooltip"><i
                                            data-feather="log-in" class="h-4 w-4"></i></a>

                                </div>
                            @endauth
                        @endif

                    </div>
                    @if($proposal->hasMedia('documents'))
                        <form action="{{route('download-files-proposal', $proposal)}}" method="POST">
                        @csrf
                            <button type="submit" class="intro-x w-8 h-8 sm:w-10 sm:h-10 flex flex-none items-center justify-center rounded-full bg-indigo-600 hover:bg-indigo-800 text-white ml-2 tooltip" title="Download Documents"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="share" data-lucide="share" class="lucide lucide-share w-3 h-3"><path d="M4 12v8a2 2 0 002 2h12a2 2 0 002-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>
                            </button>
                        </form>
                    @endif
                </div>
                <h2 class="font-medium text-xl sm:text-2xl mb-3">
                    {{$proposal->title}}
                </h2>
                <div class=" text-justify leading-relaxed">
                    {{$proposal->content}}
                </div>
            </div>
        </div>
        <div class="col-span-2"></div>
    </div>
</x-landing-layout>
