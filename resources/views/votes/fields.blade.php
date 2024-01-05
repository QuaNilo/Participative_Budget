<!-- User Id Field -->
<div class="mb-3">
    <x-base.form-label for="user_id">{{ $vote->getAttributeLabel('user_id') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('user_id') ? 'border-danger' : '') }}"
        id="user_id"
        name="user_id"
        :value="old('user_id', $vote->user_id ?? '')"
        type="number"
        step="1"
    />
    @error('user_id')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Proposal Id Field -->
<div class="mb-3">
    <x-base.form-label for="proposal_id">{{ $vote->getAttributeLabel('proposal_id') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('proposal_id') ? 'border-danger' : '') }}"
        id="proposal_id"
        name="proposal_id"
        :value="old('proposal_id', $vote->proposal_id ?? '')"
        type="number"
        step="1"
    />
    @error('proposal_id')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
