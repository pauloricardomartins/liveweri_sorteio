<div class="mb-10">
    <div>
        <x-text-input name="search" placeholder="Procurar..." wire:model.live="search"/>
    </div>

    @foreach ($this->candidates as $candidate)
        <div>
            {{ $candidate->name }}
        </div>
    @endforeach
</div>
