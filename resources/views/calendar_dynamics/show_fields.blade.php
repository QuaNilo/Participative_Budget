<!-- Date Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $calendarDynamic->getAttributeLabel('date') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $calendarDynamic->date }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Text Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $calendarDynamic->getAttributeLabel('text') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $calendarDynamic->text }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Description Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $calendarDynamic->getAttributeLabel('description') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $calendarDynamic->description }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Phase Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $calendarDynamic->getAttributeLabel('phase') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $calendarDynamic->phase }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



