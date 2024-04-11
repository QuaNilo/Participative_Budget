@props(['edition', 'winners'])
<div onclick="window.location='{{ route('propostas', ['id' =>$edition->id]) }}'" class="bg-white/60 shadow-lg rounded-md hover:cursor-pointer transition-transform transform-gpu hover:scale-105">
    <div class="flex items-start px-5 pt-5">
        <div class="w-full items-center">
            <div class="flex flex-col mt-3 lg:mt-0">
                <p class="text-lg font-bold">{{$edition->identifier}}</p>
                <span class="text-slate-400 text-base mt-0.5">{{$edition->status_label}}</span>
            </div>
        </div>
    </div>
    <div class="text-center lg:text-left p-5 h-24 overflow-hidden">
        <div>{{$edition->description}}</div>
    </div>
    <div class="flex flex-row mt-2 bg-slate-200/80 justify-evenly lg:text-right border-t border-slate-200/60 dark:border-darkmode-400">
        <p class="text-slate-400"><i class="uil uil-pen text-indigo-600"></i> <span>{{$edition->proposals_count}} Propostas</span></p>
    </div>
</div>
