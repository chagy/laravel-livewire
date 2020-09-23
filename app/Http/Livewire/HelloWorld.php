<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    private $name = "Bunnason Chagy";

    public $message1 = 'Plaseholder Message';
    public $message2 = 'Plaseholder Message';

    public function mount()
    {
        $this->name = "Chagy Bunnason";
    }

    public function render()
    {
        return view('livewire.hello-world',['name' => $this->name]);
    }
}
