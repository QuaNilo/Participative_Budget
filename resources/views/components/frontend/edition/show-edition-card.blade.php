@props(['edition', 'winners'])
{{--<div class="hover:shadow-xl rounded-md shadow-lg dark:shadow-gray-800 bg-slate-200/30">--}}
{{--    <div class="p-6">--}}
{{--        <a href="{{ route('propostas', ['id' =>$edition->id]) }}" class="title h5 text-lg font-semibold hover:text-indigo-600">{{$edition->identifier}}</a>--}}
{{--        <p class="text-slate-400 mt-2"><i class="uil uil-clock text-indigo-600"></i> <span>{{ \Carbon\Carbon::parse($edition->created_at)->diffForHumans() }}</span></p>--}}

{{--        <div class="flex justify-between items-center mt-4">--}}
{{--            <span class="bg-indigo-600/5 text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5"><span>{{$edition->status_label}}</span></span>--}}

{{--            <p class="text-slate-400"><i class="uil uil-pen text-indigo-600"></i> <span>{{$edition->proposals_count}} Propostas</span></p>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="border-t px-4 border-gray-100 dark:border-gray-700 bg-green-600/20">--}}
{{--    @if($edition->status == App\Models\Edition::STATUS_COMPLETED || $edition->status == App\Models\Edition::STATUS_CLOSED)--}}
{{--        <div class="flex items-center">--}}
{{--                <i class="uil @if($winners == 0) mdi mdi-gauge-empty text-2xl text-red-600 @else mdi mdi-gauge-full @endif"></i>--}}
{{--                <div class="ms-3">--}}
{{--                    <span><span class="text-indigo-600">{{$winners}}</span>--}}
{{--                        @if($winners == 1)--}}
{{--                            {{__('Winner Proposal')}}--}}
{{--                        @else--}}
{{--                            {{__('Winning Proposals')}}--}}
{{--                        @endif--}}
{{--                        </span>--}}
{{--                </div>--}}
{{--        </div>--}}
{{--    @endif--}}
{{--    </div>--}}
{{--</div>--}}

<div class="bg-gray-50 shadow-lg rounded-md transition-transform transform-gpu hover:scale-105">
    <div class="flex items-start px-5 pt-5">
        <div class="w-full items-center">
            <div class="flex flex-col mt-3 lg:mt-0">
                <a href="{{ route('propostas', ['id' =>$edition->id]) }}" class="text-lg font-bold hover:text-indigo-600">{{$edition->identifier}}</a>
                <span class="text-slate-400 text-base mt-0.5">{{$edition->status_label}}</span>
            </div>
        </div>
    </div>
    <div class="text-center lg:text-left p-5 h-24 overflow-hidden">
        <div>{{$edition->description}}</div>
    </div>
    <div class="flex flex-row mt-2 bg-indigo-900/10 justify-evenly lg:text-right border-t border-slate-200/60 dark:border-darkmode-400">
{{--        <span>{{ \Carbon\Carbon::parse($edition->created_at)->diffForHumans() }}</span>--}}
        <p class="text-slate-400"><i class="uil uil-pen text-indigo-600"></i> <span>{{$edition->proposals_count}} Propostas</span></p>
    </div>
</div>
