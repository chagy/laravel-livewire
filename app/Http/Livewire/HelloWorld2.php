<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld2 extends Component
{
    public $name = "Chagy";
    public function render()
    {
        return <<<'blade'
            <div>
                Care about people's approval and you will be their prisoner. 
                {{ $name }}
            </div>
        blade;
    }
}
