<div>
    @foreach($proposals as $proposal)
        <div class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden">
            <div class="relative overflow-hidden">
                <img src="assets/images/course/c1.jpg" class="group-hover:scale-110 duration-500 ease-in-out" alt="">
                <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out"></div>

                <div class="absolute start-0 bottom-0 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
                    <div class="pb-4 ps-4 flex items-center">
                        <img src="assets/images/client/01.jpg" class="h-12 w-12 rounded-full shadow-md dark:shadow-gray-800 mx-auto" alt="">
                        <div class="ms-3">
                            <a href="" class="font-semibold text-white block">{{$proposal->title}}</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content p-6 relative">
                <a href="course-detail.html" class="font-medium block text-indigo-600">Digital Marketing</a>
                <a href="course-detail.html" class="text-lg font-medium block hover:text-indigo-600 duration-500 ease-in-out mt-2">Starting SEO as your Home Based Business</a>
                <p class="text-slate-400 mt-3 mb-4">The phrasal sequence of the is now so that many campaign and benefit</p>

                <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
                    <li class="flex items-center me-4">
                        <i class="uil uil-book-open text-lg leading-none me-2 text-slate-900 dark:text-white"></i>
                        <span>25 Lectures</span>
                    </li>

                    <li class="flex items-center me-4">
                        <i class="uil uil-clock text-lg leading-none me-2 text-slate-900 dark:text-white"></i>
                        <span>1h 30m</span>
                    </li>

                    <li class="flex items-center">
                        <i class="uil uil-eye text-lg leading-none me-2 text-slate-900 dark:text-white"></i>
                        <span>3012</span>
                    </li>
                </ul>

                <div class="absolute -top-7 end-6 z-1 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
                    <div class="flex justify-center items-center w-14 h-14 bg-white dark:bg-slate-900 rounded-full shadow-lg dark:shadow-gray-800 text-indigo-600 dark:text-white">
                        <span class="font-semibold">$11</span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
