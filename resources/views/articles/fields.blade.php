<?php
  $chapters = \App\Models\Chapter::get();
?>
<div class="mb-3">
    <x-base.form-label for="chapter_id">{{ $article->getAttributeLabel('chapter_id') }}</x-base.form-label>
    <select name="chapter_id" id="chapter_id" class="w-full {{ ($errors->has('chapter_id') ? 'border-danger' : '') }} disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80">
            <option value="0">Selecione um Capitulo</option>
        @foreach($chapters as $chapter)
            <option value="{{ $chapter->id }}">{{ $chapter->title }}</option>
        @endforeach
    </select>
    @error('chapter_id')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Title Field -->
<div class="mb-3">
    <x-base.form-label for="title">{{ $article->getAttributeLabel('title') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('title') ? 'border-danger' : '') }}"
        id="title"
        name="title"
        :value="old('title', $article->title ?? '')"
        type="text"
    />
    @error('title')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Description Field -->
<div class="mb-3">
    <x-base.form-label for="description">{{ $article->getAttributeLabel('description') }}</x-base.form-label>
    <x-base.form-textarea
        class="w-full h-full {{ ($errors->has('description') ? 'border-danger' : '') }}"
        id="description"
        name="description"
        :value="old('description', $article->description ?? '')"
        type="text"
    />
    @error('description')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
