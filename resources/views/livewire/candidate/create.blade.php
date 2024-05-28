<div class="mb-5">

<form wire:submit="save">
    <div class="mb-2">
        <x-input-label>Name</x-input-label>
        <x-text-input name="name" wire:model.live="form.name"/>
        <x-input-error :messages="$errors->get('form.name')" class="mt-2" />
    </div>

    <div class="mb-2">
        <x-input-label>Email</x-input-label>
        <x-text-input name="email" type="email" wire:model.live="form.email"/>
        <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
    </div>

    <div class="mb-2">
        <x-input-label>GitHub</x-input-label>
        <x-text-input name="github" type="text" wire:model.live="form.github"/>
        <x-input-error :messages="$errors->get('form')" class="mt-2" />
    </div>

    <x-primary-button type="submit">Save</x-primary-button>

</form>

</div>
