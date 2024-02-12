<!-- Regulation Id Field -->
<div class="mb-3">
    <x-base.form-label class="hidden" for="regulation_id">{{ $chapter->getAttributeLabel('regulation_id') }}</x-base.form-label>
    <x-base.form-input
        class=" hidden w-full {{ ($errors->has('regulation_id') ? 'border-danger' : '') }}"
        id="regulation_id"
        name="regulation_id"
        :value="old('regulation_id', $chapter->regulation_id ?? '')"
        type="number"
        step="1"
    />
    @error('regulation_id')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Title Field -->
<div class="mb-3">
    <x-base.form-label for="title">{{ $chapter->getAttributeLabel('title') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('title') ? 'border-danger' : '') }}"
        id="title"
        name="title"
        :value="old('title', $chapter->title ?? '')"
        type="text"
    />
    @error('title')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Subtitle Field -->
<div class="mb-3">
    <x-base.form-label for="subtitle">{{ $chapter->getAttributeLabel('subtitle') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('subtitle') ? 'border-danger' : '') }}"
        id="subtitle"
        name="subtitle"
        :value="old('subtitle', $chapter->subtitle ?? '')"
        type="text"
    />
    @error('subtitle')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Description Field -->
<div class="mb-3">
    <x-base.form-label for="description">{{ $chapter->getAttributeLabel('description') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('description') ? 'border-danger' : '') }}"
        id="description"
        name="description"
        :value="old('description', $chapter->description ?? '')"
        type="text"
    />
    @error('description')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
