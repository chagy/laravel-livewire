<div>
    <h1>{{ $counter }}</h1>
    {{--keydown->wire:keydown, submit->wire:submit, click->wire:click --}}
    <p>
        <input 
            type="text" 
            wire:model="step"  >
    </p>
    <p>
        <input 
            type="text" 
            wire:model="stepButton"  >
    </p>
    <div style="display:flex;justify-content:center;">
        @livewire('button',['title' => 'increment','action' => 'incrementButtonEmit','step' => $stepButton])
        @livewire('button',['title' => 'decrement','action' => 'decrementButtonEmit','step' => $stepButton])
    </div>
    <button wire:click="$emitTo('hello-world','incrementEmit', {{ $step }})">+</button>
    |
    <button wire:click="$emitTo('hello-world','decrementEmit', {{ $step }})">-</button>
    <p>
        <button wire:click="$emit('incrementEmit', {{ $step }})">Plus</button>
        |
        <button wire:click="$emit('decrementEmit', {{ $step }})">Minus</button>
    </p>
    @livewire('hello-world')

</div>
