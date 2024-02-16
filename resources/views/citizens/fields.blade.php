<!-- User Id Field -->
<div class="mb-3">
    <x-base.form-label for="user_id">{{ $citizen->getAttributeLabel('user_id') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('user_id') ? 'border-danger' : '') }}"
        id="user_id"
        name="user_id"
        :value="old('user_id', $citizen->user_id ?? '')"
        type="number"
        step="1"
    />
    @error('user_id')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Cc Field -->
<div class="mb-3">
    <x-base.form-label for="CC">{{ $citizen->getAttributeLabel('CC') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('CC') ? 'border-danger' : '') }}"
        id="CC"
        name="CC"
        :value="old('CC', $citizen->CC ?? '')"
        type="text"
    />
    @error('CC')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Occupation Field -->
<div class="mb-3">
    <x-base.form-label for="occupation">{{ $citizen->getAttributeLabel('occupation') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('occupation') ? 'border-danger' : '') }}"
        id="occupation"
        name="occupation"
        :value="old('occupation', $citizen->occupation ?? '')"
        type="text"
    />
    @error('occupation')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Description Field -->
<div class="mb-3">
    <x-base.form-label for="description">{{ $citizen->getAttributeLabel('description') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('description') ? 'border-danger' : '') }}"
        id="description"
        name="description"
        :value="old('description', $citizen->description ?? '')"
        type="text"
    />
    @error('description')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Cc Verified At Field -->
<div class="mb-3">
    <x-base.form-label for="CC_verified_at">{{ $citizen->getAttributeLabel('CC_verified_at') }}</x-base.form-label>
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
            class="{{ ($errors->has('CC_verified_at') ? 'border-danger' : '') }} [&[readonly]]:bg-white"
            id="CC_verified_at"
            name="CC_verified_at"
            :value="old('CC_verified_at', $citizen->CC_verified_at ?? '')"
            data-input
        />
        <x-base.input-group.text class="cursor-pointer" title="{{ __('Clear') }}" data-clear>
            <x-base.lucide
                class="h-5 w-5 "
                icon="x"
            />
        </x-base.input-group.text>
    </x-base.input-group>
    @error('CC_verified_at')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Cc Verified Field -->
<div class="mb-3">
    <x-base.form-input
        id="CC_verified_hidden"
        name="CC_verified"
        :value="0"
        type="hidden"
    />
    <x-base.form-check>
        <x-base.form-check.input
            class="{{ ($errors->has('CC_verified') ? 'border-danger' : '') }}"
            id="CC_verified"
            name="CC_verified"
            :value="1"
            :checked="old('CC_verified', $citizen->CC_verified ?? '') == 1"
            type="checkbox"
        />
        <x-base.form-check.label for="CC_verified">{{ $citizen->getAttributeLabel('CC_verified') }}</x-base.form-check.label>
    </x-base.form-check>
    @error('CC_verified')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Address Field -->
<div class="mb-3">
    <x-base.form-label for="address">{{ $citizen->getAttributeLabel('address') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('address') ? 'border-danger' : '') }}"
        id="address"
        name="address"
        :value="old('address', $citizen->address ?? '')"
        type="text"
    />
    @error('address')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Localidade Field -->
<div class="mb-3">
    <x-base.form-label for="localidade">{{ $citizen->getAttributeLabel('localidade') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('localidade') ? 'border-danger' : '') }}"
        id="localidade"
        name="localidade"
        :value="old('localidade', $citizen->localidade ?? '')"
        type="text"
    />
    @error('localidade')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Freguesia Field -->
<div class="mb-3">
    <x-base.form-label for="freguesia">{{ $citizen->getAttributeLabel('freguesia') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('freguesia') ? 'border-danger' : '') }}"
        id="freguesia"
        name="freguesia"
        :value="old('freguesia', $citizen->freguesia ?? '')"
        type="text"
    />
    @error('freguesia')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Cod Postal Field -->
<div class="mb-3">
    <x-base.form-label for="cod_postal">{{ $citizen->getAttributeLabel('cod_postal') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('cod_postal') ? 'border-danger' : '') }}"
        id="cod_postal"
        name="cod_postal"
        :value="old('cod_postal', $citizen->cod_postal ?? '')"
        type="text"
    />
    @error('cod_postal')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Telemovel Field -->
<div class="mb-3">
    <x-base.form-label for="telemovel">{{ $citizen->getAttributeLabel('telemovel') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('telemovel') ? 'border-danger' : '') }}"
        id="telemovel"
        name="telemovel"
        :value="old('telemovel', $citizen->telemovel ?? '')"
        type="text"
    />
    @error('telemovel')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Remember Token Field -->
<div class="mb-3">
    <x-base.form-label for="remember_token">{{ $citizen->getAttributeLabel('remember_token') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('remember_token') ? 'border-danger' : '') }}"
        id="remember_token"
        name="remember_token"
        :value="old('remember_token', $citizen->remember_token ?? '')"
        type="text"
    />
    @error('remember_token')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
