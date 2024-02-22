<!-- User Id Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{__('User name')}}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $citizen->user->name }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Cc Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $citizen->getAttributeLabel('CC') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $citizen->CC }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Occupation Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $citizen->getAttributeLabel('occupation') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $citizen->occupation }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Description Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $citizen->getAttributeLabel('description') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $citizen->description }}</dd>
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



<!-- Address Verified Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $citizen->getAttributeLabel('address_verified') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $citizen->address_verified }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Pending Status Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $citizen->getAttributeLabel('pending_status') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $citizen->pending_status }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Address Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $citizen->getAttributeLabel('address') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $citizen->address }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Localidade Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $citizen->getAttributeLabel('localidade') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $citizen->localidade }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Freguesia Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $citizen->getAttributeLabel('freguesia') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $citizen->freguesia }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Cod Postal Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $citizen->getAttributeLabel('cod_postal') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $citizen->cod_postal }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Telemovel Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $citizen->getAttributeLabel('telemovel') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $citizen->telemovel }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Remember Token Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $citizen->getAttributeLabel('remember_token') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $citizen->remember_token }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



