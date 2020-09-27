<div>
    <h1>{{ $counter }}</h1>
    {{--keydown->wire:keydown, submit->wire:submit, click->wire:click --}}
    <p>
        <input 
            type="text" 
            wire:model="step"  >
    </p>
    <button wire:click="$emit('incrementEmit', {{ $step }})">+</button>|<button wire:click="$emit('decrementEmit', {{ $step }})">-</button>
    
    @livewire('hello-world')

</div>
