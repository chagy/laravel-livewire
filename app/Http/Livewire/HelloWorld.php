<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class HelloWorld extends Component
{
    private $name = "Bunnason Chagy";

    public $message1 = 'Plaseholder Message';
    public $message2 = 'Plaseholder Message';

    public $count = 0;

    public function mount(Request $request,$count)
    {
        $this->name = "Chagy Bunnason";
        $this->count = $request->count ?? $count;
    }

    public function render()
    {
        return view('livewire.hello-world',['name' => $this->name]);
    }
}
