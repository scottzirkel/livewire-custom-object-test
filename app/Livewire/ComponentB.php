<?php

namespace App\Livewire;

use App\WireableObject;
use Livewire\Attributes\On;
use Livewire\Component;

class ComponentB extends Component
{
    public function __construct(
        public WireableObject $object
    ) {
    }

    #[On('object-updated')]
    public function updateObject(WireableObject $object)
    {
        $this->object = $object;
    }

    public function render()
    {
        return view('livewire.component-b');
    }
}
