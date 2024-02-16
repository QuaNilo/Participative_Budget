<!-- Title Field -->
<div class="mb-3">
    <x-base.form-label for="title">{{ $regulation->getAttributeLabel('title') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('title') ? 'border-danger' : '') }}"
        id="title"
        name="title"
        :value="old('title', $regulation->title ?? '')"
        type="text"
    />
    @error('title')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Subtitle Field -->
<div class="mb-3">
    <x-base.form-label for="subtitle">{{ $regulation->getAttributeLabel('subtitle') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('subtitle') ? 'border-danger' : '') }}"
        id="subtitle"
        name="subtitle"
        :value="old('subtitle', $regulation->subtitle ?? '')"
        type="text"
    />
    @error('subtitle')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Description Field -->
<div class="mb-3">
    <x-base.form-label for="description">{{ $regulation->getAttributeLabel('description') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('description') ? 'border-danger' : '') }}"
        id="description"
        name="description"
        :value="old('description', $regulation->description ?? '')"
        type="text"
    />
    @error('description')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
