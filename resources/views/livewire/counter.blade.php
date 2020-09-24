<div>
    <h1>{{ $counter }}</h1>
    <h2>Hydrate : {{ $hydrate }}</h2>
    {{--keydown->wire:keydown, submit->wire:submit, click->wire:click --}}
    <p>
        <input 
            type="text" 
            wire:model.lazy="step" 
            wire:keydown.arrow-up="increment({{ $step }})" 
            wire:keydown.arrow-down="decrement({{ $step }})" >
    </p>
    <button wire:click="increment({{ $step }})">+</button>|<button wire:click="decrement({{ $step }})">-</button>
    @for ($i = 0; $i < 10; $i++)
        @livewire('hello-world',['count'=>$i])
    @endfor
    
</div>
