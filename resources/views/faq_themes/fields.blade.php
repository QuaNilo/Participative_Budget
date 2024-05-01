<!-- Theme Field -->
<div class="mb-3">
    <x-base.form-label for="theme">{{__('Category')}}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('theme') ? 'border-danger' : '') }}"
        id="theme"
        name="theme"
        :value="old('theme', $faqTheme->theme ?? '')"
        type="text"
    />
    @error('theme')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
