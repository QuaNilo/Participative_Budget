@props(['proposals', 'edition'])
<div class="grid md:grid-cols-12 grid-cols-1 mt-8">
    <div class="md:col-span-12 text-center">
        <nav aria-label="Page navigation example">
            <ul class="inline-flex items-center -space-x-px">
                @if ($proposals->onFirstPage())
                    <li class="cursor-not-allowed">
                        <span class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-s-lg border border-gray-100 dark:border-gray-700">
                            <i class="uil uil-angle-left text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                        </span>
                    </li>
                @else
                    <li>
                        <a href="{{ $proposals->previousPageUrl() }}" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-s-lg hover:text-white border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                            <i class="uil uil-angle-left text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                        </a>
                    </li>
                @endif

                @foreach ($proposals->getUrlRange(1, $proposals->lastPage()) as $page => $url)
                    <li>
                        <a href="{{ $url }}" class="{{ $page == $proposals->currentPage() ? 'z-10 ' : '' }}w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 {{ $page == $proposals->currentPage() ? 'text-white bg-indigo-600 border border-indigo-600' : 'hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600' }}">
                            {{ $page }}
                        </a>
                    </li>
                @endforeach

                @if ($proposals->hasMorePages())
                    <li>
                        <a href="{{ $proposals->nextPageUrl() }}" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-e-lg hover:text-white border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                            <i class="uil uil-angle-right text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                        </a>
                    </li>
                @else
                    <li class="cursor-not-allowed">
                        <span class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-e-lg border border-gray-100 dark:border-gray-700">
                            <i class="uil uil-angle-right text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                        </span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</div>
