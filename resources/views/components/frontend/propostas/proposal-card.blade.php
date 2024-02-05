@props(['proposal'])
<div class="group relative shadow shadow-xl rounded-md  hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden ">
    <div class="content p-6 relative flex flex-col h-full">
        <a href="{{ route('proposta-detail', $proposal->id) }}">
{{--            @foreach($proposal->getFirstMedia()->getUrl() as $media)--}}
                 <img src="{{ $proposal->getFirstMediaUrl() }}">
{{--            @endforeach--}}
            <div class="flex-grow">
                <span class="font-extrabold block text-indigo-600">{{$proposal->title}}</span>
                <span class="font-medium block text-black">{{$proposal->category()->first()->name}}</span>
                <p class="text-slate-400 mt-3 mb-4">{{$proposal->summary}}</p>
            </div>
            <div>
                <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
                    <li class="flex items-center me-4">
                        <i class="uil uil-book-open text-lg leading-none me-2 text-slate-900 dark:text-white"></i>
                        <span>{{$proposal->votes_count}} Votes</span>
                    </li>
                    <li class="flex items-center me-4">
                        <i class="uil uil-user text-lg leading-none me-2 text-slate-900 dark:text-white"></i>
                        <span>{{$proposal->user->name}}</span>
                    </li>
                    <li class="flex items-center me-4">
                        <i class="uil uil-check text-lg leading-none me-2 text-slate-900 dark:text-white"></i>
                        <span>{{$proposal->status_label}}</span>
                    </li>
                    <li class="flex items-center me-4">
                        <i class="uil uil-clock text-lg leading-none me-2 text-slate-900 dark:text-white"></i>
                        <span>{{ \Carbon\Carbon::parse($proposal->created_at)->diffForHumans() }}</span>
                    </li>

                </ul>
            </div>
        </a>
    </div>
</div>
