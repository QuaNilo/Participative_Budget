<!-- Question Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $faq->getAttributeLabel('question') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $faq->question }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Answer Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $faq->getAttributeLabel('answer') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $faq->answer }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Faq Theme Id Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $faq->getAttributeLabel('faq_theme_id') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $faq->faq_theme_id }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



