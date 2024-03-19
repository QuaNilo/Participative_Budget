<!-- Title Field -->
<div class="mb-3">
    <x-base.form-label for="title">{{ $homeInfo->getAttributeLabel('title') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('title') ? 'border-danger' : '') }}"
        id="title"
        name="title"
        :value="old('title', $homeInfo->title ?? '')"
        type="text"
    />
    @error('title')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Content Field -->
<div class="mb-3">
    <x-base.form-label for="content">{{ $homeInfo->getAttributeLabel('content') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('content') ? 'border-danger' : '') }}"
        id="content"
        name="content"
        :value="old('content', $homeInfo->content ?? '')"
        type="text"
    />
    @error('content')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
