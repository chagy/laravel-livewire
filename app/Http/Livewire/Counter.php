<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class Counter extends Component
{
    public $counter;

    public $step;

    public $stepButton;

    protected $listeners = [
        'incrementButtonEmit' => 'increment',
        'decrementButtonEmit' => 'decrement',
        'incrementEmit' => 'increment',
        'decrementEmit' => 'decrement'
    ];

    public function mount()
    {
        $this->counter = 0;
        $this->step = 1;
        $this->stepButton = 1;

    }

    public function increment($step)
    {
        $this->counter += $step;
        // $this->emit('incrementEmit');
    }

    public function decrement($step)
    {
        $this->counter -= $step;
        // $this->emit('decrementEmit');
    }

    // public function updatedStep($val)
    // {
    //     $this->emitTo('button','refreshButton',$val);
    // }

    public function updatedStepButton($val)
    {
        $this->emit('refreshButton',$val);
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
