<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                <div class='flex-center position-ref full-height'>
                    <a href="{{ url('/home') }}">Home</a>
                    <a href="{{ url('/about') }}">About</a>
                    <a href="{{ url('/contact') }}">Contact</a>
                </div>
            </div>
        blade;
    }
}
