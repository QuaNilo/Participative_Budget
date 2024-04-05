<!-- User Id Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $proposal->getAttributeLabel('User') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $proposal->user->name }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Category Id Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $proposal->getAttributeLabel('Category') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $proposal->category->name }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Edition Id Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $proposal->getAttributeLabel('Edition') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $proposal->edition->identifier }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Title Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $proposal->getAttributeLabel('title') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $proposal->title }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Content Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $proposal->getAttributeLabel('content') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $proposal->content }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Summary Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $proposal->getAttributeLabel('summary') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $proposal->summary }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Lat Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $proposal->getAttributeLabel('lat') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $proposal->lat }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Lng Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $proposal->getAttributeLabel('lng') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $proposal->lng }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Street Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $proposal->getAttributeLabel('street') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $proposal->street }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Postal Code Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $proposal->getAttributeLabel('postal_code') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $proposal->postal_code }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- City Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $proposal->getAttributeLabel('city') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $proposal->city }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Freguesia Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $proposal->getAttributeLabel('freguesia') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $proposal->freguesia }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Url Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $proposal->getAttributeLabel('url') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $proposal->url }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Winner Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $proposal->getAttributeLabel('winner') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $proposal->winnerLabel }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Rank Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $proposal->getAttributeLabel('rank') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $proposal->rank }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Status Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $proposal->getAttributeLabel('status') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $proposal->statusLabel }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Budget Estimate Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $proposal->getAttributeLabel('budget_estimate') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $proposal->budget_estimate }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Unique Impressions Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $proposal->getAttributeLabel('unique_impressions') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $proposal->unique_impressions }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Impressions Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $proposal->getAttributeLabel('impressions') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $proposal->impressions }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



