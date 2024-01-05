<!-- User Id Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $citizen->getAttributeLabel('user_id') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $citizen->user_id }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Cc Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $citizen->getAttributeLabel('CC') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $citizen->CC }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Cc Verified At Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $citizen->getAttributeLabel('CC_verified_at') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $citizen->CC_verified_at }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Cc Verified Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $citizen->getAttributeLabel('CC_verified') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $citizen->CC_verified }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Address Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $citizen->getAttributeLabel('address') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $citizen->address }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Remember Token Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $citizen->getAttributeLabel('remember_token') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $citizen->remember_token }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



