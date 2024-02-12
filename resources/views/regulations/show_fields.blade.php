<!-- Description Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $regulation->getAttributeLabel('description') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $regulation->description }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Author Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $regulation->getAttributeLabel('author') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $regulation->author }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



