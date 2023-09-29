<?php

namespace App\Livewire;

use App\WireableObject;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class ComponentA extends Component
{
    public function updateObject(): void
    {
        $object = new WireableObject(name: 'old name');

        $object->name = 'updated name';
        $this->dispatch('object-updated', $object);
    }

    #[On('object-updated')]
    public function setObject($object)
    {
        dd(gettype($object));
    }

    public function render(): View
    {
        return view('livewire.component-a');
    }
}
