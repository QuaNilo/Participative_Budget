@props(['proposal'])
<div class="bg-gray-50 shadow rounded-md transition-transform transform-gpu hover:scale-105">
    <div class="flex items-center border-b border-slate-200/60 px-5 py-4">
        <div class="mr-auto">
            <a href="" class="font-medium">{{$proposal->user->name}}</a>
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
    <div class="p-5">
        <div class="relative h-40 2xl:h-56">
            @if($proposal->getFirstMediaUrl('cover', 'square'))
             <img class="absolute inset-0 w-full h-full object-cover rounded-md" src="{{ $proposal->getFirstMediaUrl('cover', 'square') }}">
            @else
                 <img class="absolute inset-0 w-full h-full object-cover rounded-md" src="{{ $proposal->getFirstMediaUrl() }}">
            @endif
        </div>
        <a href="{{ route('proposta-detail', ['proposal_id' => $proposal->id]) }}" class="block font-medium text-base mt-5">{{$proposal->title}}</a>
        <div class="text-slate-600 mt-2 overflow-hidden h-12 ">{{$proposal->summary}}</div>
    </div>
    <div class="px-5 pt-3 pb-5 border-t border-slate-200/60">
        <div class="flex justify-around w-full text-slate-500 text-xs sm:text-sm">
            <div class="text-sm italic">Comments: <span class="font-medium"> 31</span></div>
            <div class="text-sm italic">Status: <span class="font-medium"> {{$proposal->status_label}}</span></div>
            <div class="text-sm italic">Views: <span class="font-medium"> {{$proposal->impressions}}</span></div>
            <div class="text-sm italic">Votes: <span class="font-medium"> {{$proposal->votes_count}}</span></div>
        </div>
    </div>
</div>
