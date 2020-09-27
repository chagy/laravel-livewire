<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Button extends Component
{
    public $title = 'Button';
    public $action = '';
    public $step = 0;

    public function mount($title,$action,$step)
    {
        $this->title = $title;
        $this->action = $action;
        $this->step = $step;
    }

    public function render()
    {
        return view('livewire.button');
    }
}
