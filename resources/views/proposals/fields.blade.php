<!-- User Id Field -->
<div class="mb-3">
    <x-base.form-label for="user_id">{{ $proposal->getAttributeLabel('user_id') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('user_id') ? 'border-danger' : '') }}"
        id="user_id"
        name="user_id"
        :value="old('user_id', $proposal->user_id ?? '')"
        type="number"
        step="1"
    />
    @error('user_id')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Content Field -->
<div class="mb-3">
    <x-base.form-label for="content">{{ $proposal->getAttributeLabel('content') }}</x-base.form-label>
    <x-base.form-textarea
        class="w-full {{ ($errors->has('content') ? 'border-danger' : '') }}"
        id="content"
        name="content"
        rows="5"
    >{{ old('content', $proposal->content ?? '') }}</x-base.form-textarea>
    @error('content')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Title Field -->
<div class="mb-3">
    <x-base.form-label for="title">{{ $proposal->getAttributeLabel('title') }}</x-base.form-label>
    <x-base.form-textarea
        class="w-full {{ ($errors->has('title') ? 'border-danger' : '') }}"
        id="title"
        name="title"
        rows="5"
    >{{ old('title', $proposal->title ?? '') }}</x-base.form-textarea>
    @error('title')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
