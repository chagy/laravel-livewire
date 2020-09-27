<div>
    <h1>{{ $counter }}</h1>
    {{--keydown->wire:keydown, submit->wire:submit, click->wire:click --}}
    <p>
        <input 
            type="text" 
            wire:model="step"  >
    </p>
    <div style="display:flex;justify-content:center;">
        @livewire('button',['title' => 'increment','action' => 'incrementEmit','step' => $step])
        @livewire('button',['title' => 'decrement','action' => 'decrementEmit','step' => $step])
    </div>
    <button wire:click="$emit('incrementEmit', {{ $step }})">+</button>|<button wire:click="$emit('decrementEmit', {{ $step }})">-</button>
    
    @livewire('hello-world')

</div>
