<!-- Require Cc Vote Create Field -->
<div class="mb-3">
    <x-base.form-input
        id="require_cc_vote_create_hidden"
        name="require_cc_vote_create"
        :value="0"
        type="hidden"
    />
    <x-base.form-check>
        <x-base.form-check.input
            class="{{ ($errors->has('require_cc_vote_create') ? 'border-danger' : '') }}"
            id="require_cc_vote_create"
            name="require_cc_vote_create"
            :value="1"
            :checked="old('require_cc_vote_create', $setting->require_cc_vote_create ?? '') == 1"
            type="checkbox"
        />
        <x-base.form-check.label for="require_cc_vote_create">{{ $setting->getAttributeLabel('require_cc_vote_create') }}</x-base.form-check.label>
    </x-base.form-check>
    @error('require_cc_vote_create')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Require Address Vote Create Field -->
<div class="mb-3">
    <x-base.form-input
        id="require_address_vote_create_hidden"
        name="require_address_vote_create"
        :value="0"
        type="hidden"
    />
    <x-base.form-check>
        <x-base.form-check.input
            class="{{ ($errors->has('require_address_vote_create') ? 'border-danger' : '') }}"
            id="require_address_vote_create"
            name="require_address_vote_create"
            :value="1"
            :checked="old('require_address_vote_create', $setting->require_address_vote_create ?? '') == 1"
            type="checkbox"
        />
        <x-base.form-check.label for="require_address_vote_create">{{ $setting->getAttributeLabel('require_address_vote_create') }}</x-base.form-check.label>
    </x-base.form-check>
    @error('require_address_vote_create')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Allow Change Lang Field -->
<div class="mb-3">
    <x-base.form-input
        id="allow_change_lang_hidden"
        name="allow_change_lang"
        :value="0"
        type="hidden"
    />
    <x-base.form-check>
        <x-base.form-check.input
            class="{{ ($errors->has('allow_change_lang') ? 'border-danger' : '') }}"
            id="allow_change_lang"
            name="allow_change_lang"
            :value="1"
            :checked="old('allow_change_lang', $setting->allow_change_lang ?? '') == 1"
            type="checkbox"
        />
        <x-base.form-check.label for="allow_change_lang">{{ $setting->getAttributeLabel('allow_change_lang') }}</x-base.form-check.label>
    </x-base.form-check>
    @error('allow_change_lang')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Address Field -->
<div class="mb-3">
    <x-base.form-label for="address">{{ $setting->getAttributeLabel('address') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('address') ? 'border-danger' : '') }}"
        id="address"
        name="address"
        :value="old('address', $setting->address ?? '')"
        type="text"
    />
    @error('address')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>


<!-- Map Lat Field -->
<div class="mb-3">
    <x-base.form-label for="map_lat">{{ $setting->getAttributeLabel('map_lat') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('map_lat') ? 'border-danger' : '') }}"
        id="map_lat"
        name="map_lat"
        :value="old('map_lat', $setting->map_lat ?? '')"
        type="text"
    />
    @error('map_lat')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Map Lng Field -->
<div class="mb-3">
    <x-base.form-label for="map_lng">{{ $setting->getAttributeLabel('map_lng') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('map_lng') ? 'border-danger' : '') }}"
        id="map_lng"
        name="map_lng"
        :value="old('map_lng', $setting->map_lng ?? '')"
        type="text"
    />
    @error('map_lng')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Nome Cm Field -->
<div class="mb-3">
    <x-base.form-label for="nome_cm">{{ $setting->getAttributeLabel('nome_cm') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('nome_cm') ? 'border-danger' : '') }}"
        id="nome_cm"
        name="nome_cm"
        :value="old('nome_cm', $setting->nome_cm ?? '')"
        type="text"
    />
    @error('nome_cm')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Email Cm Field -->
<div class="mb-3">
    <x-base.form-label for="email_cm">{{ $setting->getAttributeLabel('email_cm') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('email_cm') ? 'border-danger' : '') }}"
        id="email_cm"
        name="email_cm"
        :value="old('email_cm', $setting->email_cm ?? '')"
        type="text"
    />
    @error('email_cm')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Facebook Field -->
<div class="mb-3">
    <x-base.form-label for="facebook">{{ $setting->getAttributeLabel('facebook') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('facebook') ? 'border-danger' : '') }}"
        id="facebook"
        name="facebook"
        :value="old('facebook', $setting->facebook ?? '')"
        type="text"
    />
    @error('facebook')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Instagram Field -->
<div class="mb-3">
    <x-base.form-label for="instagram">{{ $setting->getAttributeLabel('instagram') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('instagram') ? 'border-danger' : '') }}"
        id="instagram"
        name="instagram"
        :value="old('instagram', $setting->instagram ?? '')"
        type="text"
    />
    @error('instagram')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Twitter Field -->
<div class="mb-3">
    <x-base.form-label for="twitter">{{ $setting->getAttributeLabel('twitter') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('twitter') ? 'border-danger' : '') }}"
        id="twitter"
        name="twitter"
        :value="old('twitter', $setting->twitter ?? '')"
        type="text"
    />
    @error('twitter')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Linkedin Field -->
<div class="mb-3">
    <x-base.form-label for="linkedin">{{ $setting->getAttributeLabel('linkedin') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('linkedin') ? 'border-danger' : '') }}"
        id="linkedin"
        name="linkedin"
        :value="old('linkedin', $setting->linkedin ?? '')"
        type="text"
    />
    @error('linkedin')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Youtube Field -->
<div class="mb-3">
    <x-base.form-label for="youtube">{{ $setting->getAttributeLabel('youtube') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('youtube') ? 'border-danger' : '') }}"
        id="youtube"
        name="youtube"
        :value="old('youtube', $setting->youtube ?? '')"
        type="text"
    />
    @error('youtube')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Website Cm Field -->
<div class="mb-3">
    <x-base.form-label for="website_cm">{{ $setting->getAttributeLabel('website_cm') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('website_cm') ? 'border-danger' : '') }}"
        id="website_cm"
        name="website_cm"
        :value="old('website_cm', $setting->website_cm ?? '')"
        type="text"
    />
    @error('website_cm')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Telephone Cm Field -->
<div class="mb-3">
    <x-base.form-label for="telephone_cm">{{ $setting->getAttributeLabel('telephone_cm') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('telephone_cm') ? 'border-danger' : '') }}"
        id="telephone_cm"
        name="telephone_cm"
        :value="old('telephone_cm', $setting->telephone_cm ?? '')"
        type="text"
    />
    @error('telephone_cm')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
