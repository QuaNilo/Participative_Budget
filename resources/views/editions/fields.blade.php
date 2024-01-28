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
            :value="old('edition_end', $edition->edition_end ?? 'null')"
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
            :value="old('edition_publish', $edition->edition_publish ?? 'null')"
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
