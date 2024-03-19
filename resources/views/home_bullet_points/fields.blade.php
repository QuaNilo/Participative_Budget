
<!-- Bullet Point Field -->
<div class="mb-3">
    <x-base.form-label for="bullet_point">{{ $homeBulletPoints->getAttributeLabel('bullet_point') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('bullet_point') ? 'border-danger' : '') }}"
        id="bullet_point"
        name="bullet_point"
        :value="old('bullet_point', $homeBulletPoints->bullet_point ?? '')"
        type="text"
    />
    @error('bullet_point')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
