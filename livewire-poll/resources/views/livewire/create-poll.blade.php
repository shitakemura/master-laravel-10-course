<div>
    <form wire:submit.prevent="createPoll">
        <label>Poll Title</label>

        {{-- MEMO: https://livewire.laravel.com/docs/components#binding-inputs-to-properties --}}
        <input type="text" wire:model.live="title" />

        <div class="mt-4 mb-4">
            <button class="btn" wire:click.prevent="addOption">Add Option</button>
        </div>

        <div>
            @foreach ($options as $index => $option)
                <div class="mb-4">
                    <label>Option {{ $index + 1 }}</label>
                    <div class="flex gap-2">
                        <input type="text" wire:model="options.{{ $index }}" />
                        <button class="btn" wire:click.prevent="removeOption({{ $index }})">Remove</button>
                    </div>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn">Create Poll</button>
    </form>
</div>
