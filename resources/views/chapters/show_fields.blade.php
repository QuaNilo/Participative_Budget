{{--<!-- Regulation Id Field -->--}}
{{--<div class="grid grid-cols-1 md:grid-cols-3">--}}
{{--    <dt class="font-medium md:col-span-1">{{ $chapter->getAttributeLabel('regulation_id') }}</dt>--}}
{{--    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $chapter->regulation_id }}</dd>--}}
{{--</div>--}}
{{--<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>--}}



<!-- Title Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $chapter->getAttributeLabel('title') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $chapter->title }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Subtitle Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $chapter->getAttributeLabel('subtitle') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $chapter->subtitle }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Description Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $chapter->getAttributeLabel('description') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $chapter->description }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



