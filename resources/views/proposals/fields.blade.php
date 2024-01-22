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

<!-- Edition Id Field -->
<div class="mb-3">
    <x-base.form-label for="edition_id">{{ $proposal->getAttributeLabel('edition_id') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('edition_id') ? 'border-danger' : '') }}"
        id="edition_id"
        name="edition_id"
        :value="old('edition_id', $proposal->edition_id ?? '')"
        type="number"
        step="1"
    />
    @error('edition_id')
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

<!-- Lat Field -->
<div class="mb-3">
    <x-base.form-label for="lat">{{ $proposal->getAttributeLabel('lat') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('lat') ? 'border-danger' : '') }}"
        id="lat"
        name="lat"
        :value="old('lat', $proposal->lat ?? '')"
        type="number"
        step="1"
    />
    @error('lat')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Lng Field -->
<div class="mb-3">
    <x-base.form-label for="lng">{{ $proposal->getAttributeLabel('lng') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('lng') ? 'border-danger' : '') }}"
        id="lng"
        name="lng"
        :value="old('lng', $proposal->lng ?? '')"
        type="number"
        step="1"
    />
    @error('lng')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Street Field -->
<div class="mb-3">
    <x-base.form-label for="street">{{ $proposal->getAttributeLabel('street') }}</x-base.form-label>
    <x-base.form-textarea
        class="w-full {{ ($errors->has('street') ? 'border-danger' : '') }}"
        id="street"
        name="street"
        rows="5"
    >{{ old('street', $proposal->street ?? '') }}</x-base.form-textarea>
    @error('street')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Postal Code Field -->
<div class="mb-3">
    <x-base.form-label for="postal_code">{{ $proposal->getAttributeLabel('postal_code') }}</x-base.form-label>
    <x-base.form-textarea
        class="w-full {{ ($errors->has('postal_code') ? 'border-danger' : '') }}"
        id="postal_code"
        name="postal_code"
        rows="5"
    >{{ old('postal_code', $proposal->postal_code ?? '') }}</x-base.form-textarea>
    @error('postal_code')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- City Field -->
<div class="mb-3">
    <x-base.form-label for="city">{{ $proposal->getAttributeLabel('city') }}</x-base.form-label>
    <x-base.form-textarea
        class="w-full {{ ($errors->has('city') ? 'border-danger' : '') }}"
        id="city"
        name="city"
        rows="5"
    >{{ old('city', $proposal->city ?? '') }}</x-base.form-textarea>
    @error('city')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Freguesia Field -->
<div class="mb-3">
    <x-base.form-label for="freguesia">{{ $proposal->getAttributeLabel('freguesia') }}</x-base.form-label>
    <x-base.form-textarea
        class="w-full {{ ($errors->has('freguesia') ? 'border-danger' : '') }}"
        id="freguesia"
        name="freguesia"
        rows="5"
    >{{ old('freguesia', $proposal->freguesia ?? '') }}</x-base.form-textarea>
    @error('freguesia')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Winner Field -->
<div class="mb-3">
    <x-base.form-input
        id="winner_hidden"
        name="winner"
        :value="0"
        type="hidden"
    />
    <x-base.form-check>
        <x-base.form-check.input
            class="{{ ($errors->has('winner') ? 'border-danger' : '') }}"
            id="winner"
            name="winner"
            :value="1"
            :checked="old('winner', $proposal->winner ?? '') == 1"
            type="checkbox"
        />
        <x-base.form-check.label for="winner">{{ $proposal->getAttributeLabel('winner') }}</x-base.form-check.label>
    </x-base.form-check>
    @error('winner')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Rank Field -->
<div class="mb-3">
    <x-base.form-label for="rank">{{ $proposal->getAttributeLabel('rank') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('rank') ? 'border-danger' : '') }}"
        id="rank"
        name="rank"
        :value="old('rank', $proposal->rank ?? '')"
        type="number"
        step="1"
    />
    @error('rank')
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

<!-- Budget Estimate Field -->
<div class="mb-3">
    <x-base.form-label for="budget_estimate">{{ $proposal->getAttributeLabel('budget_estimate') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('budget_estimate') ? 'border-danger' : '') }}"
        id="budget_estimate"
        name="budget_estimate"
        :value="old('budget_estimate', $proposal->budget_estimate ?? '')"
        type="number"
        step="1"
    />
    @error('budget_estimate')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
