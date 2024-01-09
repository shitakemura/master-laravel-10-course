<div>
    <form>
        <label>Poll Title</label>

        {{-- MEMO: https://livewire.laravel.com/docs/components#binding-inputs-to-properties --}}
        <input type="text" wire:model.live="title" />

        Current title: {{ $title }}
    </form>
</div>
