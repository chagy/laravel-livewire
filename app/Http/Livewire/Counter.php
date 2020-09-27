<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class Counter extends Component
{
    public $counter;

    public $step;

    public function mount()
    {
        $this->counter = 0;
        $this->step = 1;
    }

    // public function increment()
    // {
    //     $this->emit('incrementEmit');
    // }

    // public function decrement()
    // {
    //     $this->emit('decrementEmit');
    // }

    public function render()
    {
        return view('livewire.counter');
    }
}
