<div>
    <form wire:submit.prevent="submit">
        @csrf

        {{ $this->form }}

        <button type="submit">
            Submit
        </button>
    </form>

    {{ $this->modal }}
</div>