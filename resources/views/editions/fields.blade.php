<!-- Edition End Field -->
<div class="mb-3">
    <x-base.form-label for="edition_end">{{ $edition->getAttributeLabel('edition_end') }}</x-base.form-label>
    <x-base.input-group
        class="flatpickr"
        data-wrap="true"
        data-enable-time="false"
        data-date-format='Y-m-d'
        data-time_24hr='true'
        data-minute-increment='1'
        inputGroup
    >
        <x-base.input-group.text class="cursor-pointer" title="{{ __('Toggle') }}" data-toggle>
            <x-base.lucide
                class="h-5 w-5"
                icon="Calendar"
            />
        </x-base.input-group.text>
        <x-base.flatpickr
            class="{{ ($errors->has('edition_end') ? 'border-danger' : '') }} [&[readonly]]:bg-white"
            id="edition_end"
            name="edition_end"
            :value="old('edition_end', $edition->edition_end ?? '')"
            data-input
        />
        <x-base.input-group.text class="cursor-pointer" title="{{ __('Clear') }}" data-clear>
            <x-base.lucide
                class="h-5 w-5 "
                icon="x"
            />
        </x-base.input-group.text>
    </x-base.input-group>
    @error('edition_end')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Edition Publish Field -->
<div class="mb-3">
    <x-base.form-label for="edition_publish">{{ $edition->getAttributeLabel('edition_publish') }}</x-base.form-label>
    <x-base.input-group
        class="flatpickr"
        data-wrap="true"
        data-enable-time="false"
        data-date-format='Y-m-d'
        data-time_24hr='true'
        data-minute-increment='1'
        inputGroup
    >
        <x-base.input-group.text class="cursor-pointer" title="{{ __('Toggle') }}" data-toggle>
            <x-base.lucide
                class="h-5 w-5"
                icon="Calendar"
            />
        </x-base.input-group.text>
        <x-base.flatpickr
            class="{{ ($errors->has('edition_publish') ? 'border-danger' : '') }} [&[readonly]]:bg-white"
            id="edition_publish"
            name="edition_publish"
            :value="old('edition_publish', $edition->edition_publish ?? '')"
            data-input
        />
        <x-base.input-group.text class="cursor-pointer" title="{{ __('Clear') }}" data-clear>
            <x-base.lucide
                class="h-5 w-5 "
                icon="x"
            />
        </x-base.input-group.text>
    </x-base.input-group>
    @error('edition_publish')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Status Field -->
<div class="mb-3">
    <x-base.form-label for="status">{{ $edition->getAttributeLabel('status') }}</x-base.form-label>
    <x-base.form-select
        class="w-full {{ ($errors->has('status') ? 'border-danger' : '') }}"
        id="status"
        name="status"
        :value="old('status', $edition->status ?? '')"
        type="text"
    >
        <option >{{ __('Select an option') }}</option>
        @foreach(\App\Models\Edition::getStatusArray() as $key => $label)
        <option value="{{ $key }}" {{ old('status', $edition->status ?? '') == $key ? 'selected' : '' }}>{{ $label }}</option>
        @endforeach
    </x-base.form-select>
    @error('status')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Identifier Field -->
<div class="mb-3">
    <x-base.form-label for="identifier">{{ $edition->getAttributeLabel('identifier') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('identifier') ? 'border-danger' : '') }}"
        id="identifier"
        name="identifier"
        :value="old('identifier', $edition->identifier ?? '')"
        type="text"
    />
    @error('identifier')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Edition Number Field -->
<div class="mb-3">
    <x-base.form-label for="edition_number">{{ $edition->getAttributeLabel('edition_number') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('edition_number') ? 'border-danger' : '') }}"
        id="edition_number"
        name="edition_number"
        :value="old('edition_number', $edition->edition_number ?? '')"
        type="text"
    />
    @error('edition_number')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Title Field -->
<div class="mb-3">
    <x-base.form-label for="title">{{ $edition->getAttributeLabel('title') }}</x-base.form-label>
    <x-base.form-textarea
        class="w-full {{ ($errors->has('title') ? 'border-danger' : '') }}"
        id="title"
        name="title"
        rows="5"
    >{{ old('title', $edition->title ?? '') }}</x-base.form-textarea>
    @error('title')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Description Field -->
<div class="mb-3">
    <x-base.form-label for="description">{{ $edition->getAttributeLabel('description') }}</x-base.form-label>
    <x-base.form-textarea
        class="w-full {{ ($errors->has('description') ? 'border-danger' : '') }}"
        id="description"
        name="description"
        rows="5"
    >{{ old('description', $edition->description ?? '') }}</x-base.form-textarea>
    @error('description')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Year Field -->
<div class="mb-3">
    <x-base.form-label for="year">{{ $edition->getAttributeLabel('year') }}</x-base.form-label>
    <x-base.input-group
        class="flatpickr"
        data-wrap="true"
        data-enable-time="false"
        data-date-format='Y-m-d'
        data-time_24hr='true'
        data-minute-increment='1'
        inputGroup
    >
        <x-base.input-group.text class="cursor-pointer" title="{{ __('Toggle') }}" data-toggle>
            <x-base.lucide
                class="h-5 w-5"
                icon="Calendar"
            />
        </x-base.input-group.text>
        <x-base.flatpickr
            class="{{ ($errors->has('year') ? 'border-danger' : '') }} [&[readonly]]:bg-white"
            id="year"
            name="year"
            :value="old('year', $edition->year ?? '')"
            data-input
        />
        <x-base.input-group.text class="cursor-pointer" title="{{ __('Clear') }}" data-clear>
            <x-base.lucide
                class="h-5 w-5 "
                icon="x"
            />
        </x-base.input-group.text>
    </x-base.input-group>
    @error('year')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
