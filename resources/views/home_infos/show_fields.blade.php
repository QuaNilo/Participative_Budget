<!-- Home Id Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $homeInfo->getAttributeLabel('home_id') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $homeInfo->home_id }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Title Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $homeInfo->getAttributeLabel('title') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $homeInfo->title }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Content Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $homeInfo->getAttributeLabel('content') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $homeInfo->content }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



