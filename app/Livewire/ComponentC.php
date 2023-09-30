<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class ComponentC extends Component
{
    public $address = null;

    #[On('run-action')]
    public function dispatchedEvent($address)
    {
        // I expect $this->address to be empty, since we have fired an http request before dispatching
        // I would expect address to be the same object type that was passed in
        $this->address = $address;
    }

    public function render()
    {
        return view('livewire.component-c');
    }
}
