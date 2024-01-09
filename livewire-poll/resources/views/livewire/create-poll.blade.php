<div>
    <form>
        <label>Poll Title</label>

        {{-- MEMO: https://livewire.laravel.com/docs/components#binding-inputs-to-properties --}}
        <input type="text" wire:model.live="title" />

        Current title: {{ $title }}

        <div class="mt-4 mb-4">
            <button class="btn" wire:click.prevent="addOption">Add Option</button>
        </div>

        <div>
            @foreach ($options as $index => $option)
                <div>
                    {{ $index }} - {{ $option }}
                </div>
            @endforeach
        </div>
    </form>
</div>
