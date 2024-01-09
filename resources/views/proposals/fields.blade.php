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

<!-- Category Id Field -->
<div class="mb-3">
    <x-base.form-label for="category_id">{{ $proposal->getAttributeLabel('category_id') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('category_id') ? 'border-danger' : '') }}"
        id="category_id"
        name="category_id"
        :value="old('category_id', $proposal->category_id ?? '')"
        type="number"
        step="1"
    />
    @error('category_id')
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

<!-- Coordinatex Field -->
<div class="mb-3">
    <x-base.form-label for="coordinateX">{{ $proposal->getAttributeLabel('coordinateX') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('coordinateX') ? 'border-danger' : '') }}"
        id="coordinateX"
        name="coordinateX"
        :value="old('coordinateX', $proposal->coordinateX ?? '')"
        type="number"
        step="1"
    />
    @error('coordinateX')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Coordinatey Field -->
<div class="mb-3">
    <x-base.form-label for="coordinateY">{{ $proposal->getAttributeLabel('coordinateY') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('coordinateY') ? 'border-danger' : '') }}"
        id="coordinateY"
        name="coordinateY"
        :value="old('coordinateY', $proposal->coordinateY ?? '')"
        type="number"
        step="1"
    />
    @error('coordinateY')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Summary Field -->
<div class="mb-3">
    <x-base.form-label for="summary">{{ $proposal->getAttributeLabel('summary') }}</x-base.form-label>
    <x-base.form-textarea
        class="w-full {{ ($errors->has('summary') ? 'border-danger' : '') }}"
        id="summary"
        name="summary"
        rows="5"
    >{{ old('summary', $proposal->summary ?? '') }}</x-base.form-textarea>
    @error('summary')
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

<!-- Status Field -->
<div class="mb-3">
    <x-base.form-label for="status">{{ $proposal->getAttributeLabel('status') }}</x-base.form-label>
    <x-base.form-select
        class="w-full {{ ($errors->has('status') ? 'border-danger' : '') }}"
        id="status"
        name="status"
        :value="old('status', $proposal->status ?? '')"
        type="text"
    >
        <option >{{ __('Select an option') }}</option>
        @foreach(\App\Models\Proposal::getStatusArray() as $key => $label)
        <option value="{{ $key }}" {{ old('status', $proposal->status ?? '') == $key ? 'selected' : '' }}>{{ $label }}</option>
        @endforeach
    </x-base.form-select>
    @error('status')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
