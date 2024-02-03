<!-- Date Field -->
<div class="mb-3">
    <x-base.form-label for="date">{{ $calendarDynamic->getAttributeLabel('date') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('date') ? 'border-danger' : '') }}"
        id="date"
        name="date"
        :value="old('date', $calendarDynamic->date ?? '')"
        type="text"
    />
    @error('date')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Text Field -->
<div class="mb-3">
    <x-base.form-label for="text">{{ $calendarDynamic->getAttributeLabel('text') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('text') ? 'border-danger' : '') }}"
        id="text"
        name="text"
        :value="old('text', $calendarDynamic->text ?? '')"
        type="text"
    />
    @error('text')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Description Field -->
<div class="mb-3">
    <x-base.form-label for="description">{{ $calendarDynamic->getAttributeLabel('description') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('description') ? 'border-danger' : '') }}"
        id="description"
        name="description"
        :value="old('description', $calendarDynamic->description ?? '')"
        type="text"
    />
    @error('description')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Phase Field -->
<div class="mb-3">
    <x-base.form-label for="phase">{{ $calendarDynamic->getAttributeLabel('phase') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('phase') ? 'border-danger' : '') }}"
        id="phase"
        name="phase"
        :value="old('phase', $calendarDynamic->phase ?? '')"
        type="number"
        step="1"
    />
    @error('phase')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
