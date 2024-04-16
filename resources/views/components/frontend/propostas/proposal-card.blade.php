@props(['proposal'])
<div onclick="window.location='{{ route('proposta-detail', ['proposal_id' => $proposal->id]) }}'" class="bg-white/90 shadow-lg rounded-md hover:cursor-pointer transition-transform transform-gpu hover:scale-105">
    <div class="flex items-center border-b border-slate-200/60 px-5 py-4">
        <div class="mr-auto">
            <a class="font-medium">{{$proposal->user->name}}</a>
            <div class="flex text-slate-500 truncate text-xs mt-0.5">
                <span class="text-indigo-600 inline-block truncate">
                    {{$proposal->category()->first()->name}}
                </span>
                <span class="mx-1">
                    •
                </span>
                <span class="text-xs italic">
                    {{ \Carbon\Carbon::parse($proposal->created_at)->diffForHumans() }}
                </span>
            </div>
        </div>
    </div>
    <div class="p-7">
        <div class="relative h-40 2xl:h-56">
            @if($proposal->winner)
                <span class="absolute top-0 z-50 right-0 bg-pending/80 text-white text-xs m-5 px-2 py-1 bg-amber-500 rounded ">Winner</span>
            @endif
            @if($proposal->getFirstMediaUrl('cover', 'retangular'))
                <img class="absolute inset-0 w-full h-full object-cover rounded-md" src="{{ $proposal->getFirstMediaUrl('cover', 'retangular') }}">
            @else
                 <img class="absolute inset-0 w-full h-full object-cover rounded-md" src="{{ $proposal->getFirstMediaUrl() }}">
            @endif
        </div>
        <p class="block font-medium text-base mt-5">{{$proposal->title}}</p>
        <div class="text-slate-600 mt-2 overflow-hidden h-12 ">{{$proposal->summary}}</div>
    </div>
    <div class="px-5 pt-3 pb-5 border-t border-slate-200/60">
        <div class="flex justify-around w-full text-slate-500 text-xs sm:text-sm">
            <div class="text-sm italic">Status: <span class="font-medium"> {{$proposal->status_label}}</span></div>
            <div class="text-sm italic">Views: <span class="font-medium"> {{$proposal->impressions}}</span></div>
            <div class="text-sm italic">Votes: <span class="font-medium"> {{$proposal->votes_count}}</span></div>
        </div>
    </div>
</div>
