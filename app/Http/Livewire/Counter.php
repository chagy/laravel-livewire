<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class Counter extends Component
{
    public $counter;

    public $step;

    protected $listeners = [
        'incrementEmit' => 'increment',
        'decrementEmit' => 'decrement'
    ];

    public function mount()
    {
        $this->counter = 0;
        $this->step = 1;
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

    public function render()
    {
        return view('livewire.counter');
    }
}
