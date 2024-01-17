<!-- Year Field -->
<div class="mb-3">
    <x-base.form-label for="year">{{ $editionWinner->getAttributeLabel('year') }}</x-base.form-label>
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
            :value="old('year', $editionWinner->year ?? '')"
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

<!-- Rank Field -->
<div class="mb-3">
    <x-base.form-label for="rank">{{ $editionWinner->getAttributeLabel('rank') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('rank') ? 'border-danger' : '') }}"
        id="rank"
        name="rank"
        :value="old('rank', $editionWinner->rank ?? '')"
        type="number"
        step="1"
    />
    @error('rank')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
