@props(['edition', 'winners'])
<div class="rounded-md shadow shadow-xl dark:shadow-gray-800">
    <div class="p-6">
        <a href="{{ route('propostas', $edition->id) }}" class="title h5 text-lg font-semibold hover:text-indigo-600">{{$edition->identifier}}</a>
        <p class="text-slate-400 mt-2"><i class="uil uil-clock text-indigo-600"></i> <span>{{ \Carbon\Carbon::parse($edition->created_at)->diffForHumans() }}</span></p>

        <div class="flex justify-between items-center mt-4">
            <span class="bg-indigo-600/5 text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5"><span>{{$edition->status_label}}</span></span>

            <p class="text-slate-400"><i class="uil uil-pen text-indigo-600"></i> <span>{{$edition->proposals_count}} Propostas</span></p>
        </div>
    </div>

    <div class="flex items-center p-6 border-t border-gray-100 dark:border-gray-700">
        <i class="uil @if($winners == 0) mdi mdi-gauge-empty text-2xl text-red-600 @else mdi mdi-gauge-full  text-green-600 @endif text-3xl"></i>

        <div class="ms-3">
            <span><span class="text-indigo-600">{{$winners}}</span>
                @if($winners == 1)
                    {{__('Winner Proposal')}}
                @else
                    {{__('Winning Proposals')}}
                @endif
                </span>
        </div>
    </div>
</div>
