<div class="rounded-md border border-slate-200/60 p-5 dark:border-darkmode-400">
    <div
        class="flex items-center border-b border-slate-200/60 pb-5 font-medium dark:border-darkmode-400">
        {{ __('regulation') }}
    </div>

    <!-- Description Field -->
    <div class="mb-3">
        <x-base.form-label for="description">{{ $regulation->getAttributeLabel('description') }}</x-base.form-label>
        <x-base.form-input
            class="w-full {{ ($errors->has('description') ? 'border-danger' : '') }}"
            id="description"
            name="description"
            :value="old('description', $regulation->description ?? '')"
            type="text"
        />
        @error('description')
            <div class="mt-2 text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Author Field -->
    <div class="mb-3">
        <x-base.form-label for="author">{{ $regulation->getAttributeLabel('author') }}</x-base.form-label>
        <x-base.form-input
            class="w-full {{ ($errors->has('author') ? 'border-danger' : '') }}"
            id="author"
            name="author"
            :value="old('author', $regulation->author ?? '')"
            type="text"
        />
        @error('author')
            <div class="mt-2 text-danger">{{ $message }}</div>
        @enderror
    </div>

    <x-base.button
                    class="w-24"
                    type=""
                    variant="primary"
                >{{ __('Add Article') }}
    </x-base.button>
</div>
