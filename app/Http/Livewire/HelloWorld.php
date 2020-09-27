<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class HelloWorld extends Component
{
    private $name = "Bunnason Chagy";

    public $message1 = 'Plaseholder Message';
    public $message2 = 'Plaseholder Message';

    protected $listeners = [
        'incrementEmit' => 'increment',
        'decrementEmit' => 'decrement'
    ];

    public $count = 0;

    public function increment($step)
    {
        $this->count+=$step;
    }

    public function decrement($step)
    {
        $this->count-=$step;
    }

    public function mount()
    {
        $this->count = 1;
    }

    public function render()
    {
        return view('livewire.hello-world',['name' => $this->name]);
    }
}
