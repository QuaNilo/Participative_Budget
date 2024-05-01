<!-- Question Field -->
<div class="mb-3">
    <x-base.form-label for="question">{{ $faq->getAttributeLabel('question') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('question') ? 'border-danger' : '') }}"
        id="question"
        name="question"
        :value="old('question', $faq->question ?? '')"
        type="text"
    />
    @error('question')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Answer Field -->
<div class="mb-3">
    <x-base.form-label for="answer">{{ $faq->getAttributeLabel('answer') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('answer') ? 'border-danger' : '') }}"
        id="answer"
        name="answer"
        :value="old('answer', $faq->answer ?? '')"
        type="text"
    />
    @error('answer')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<?php
  $themes = \App\Models\FaqTheme::get();
?>
<div class="mb-3">
    <x-base.form-label for="faq_theme_id">{{__('Category')}}</x-base.form-label>
    <select name="faq_theme_id" id="faq_theme_id" class="w-full {{ ($errors->has('faq_theme_id') ? 'border-danger' : '') }} disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80">
            <option value="0">Selecione um Tema</option>
        @foreach($themes as $theme)
            <option value="{{ $theme->id }}">{{ $theme->theme }}</option>
        @endforeach
    </select>
    @error('faq_theme_id')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
