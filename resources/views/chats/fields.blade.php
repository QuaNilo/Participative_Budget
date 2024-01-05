<!-- Sender Id Field -->
<div class="mb-3">
    <x-base.form-label for="sender_id">{{ $chat->getAttributeLabel('sender_id') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('sender_id') ? 'border-danger' : '') }}"
        id="sender_id"
        name="sender_id"
        :value="old('sender_id', $chat->sender_id ?? '')"
        type="number"
        step="1"
    />
    @error('sender_id')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Receiver Id Field -->
<div class="mb-3">
    <x-base.form-label for="receiver_id">{{ $chat->getAttributeLabel('receiver_id') }}</x-base.form-label>
    <x-base.form-input
        class="w-full {{ ($errors->has('receiver_id') ? 'border-danger' : '') }}"
        id="receiver_id"
        name="receiver_id"
        :value="old('receiver_id', $chat->receiver_id ?? '')"
        type="number"
        step="1"
    />
    @error('receiver_id')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Content Field -->
<div class="mb-3">
    <x-base.form-label for="content">{{ $chat->getAttributeLabel('content') }}</x-base.form-label>
    <x-base.form-textarea
        class="w-full {{ ($errors->has('content') ? 'border-danger' : '') }}"
        id="content"
        name="content"
        rows="5"
    >{{ old('content', $chat->content ?? '') }}</x-base.form-textarea>
    @error('content')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
