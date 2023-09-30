<?php

namespace App\Livewire;

use App\Address;
use Livewire\Attributes\On;
use Livewire\Component;

class ComponentB extends Component
{
    public Address $address;

    public function mount()
    {
        $this->address = new Address();
    }

    #[On('run-action')]
    public function action()
    {
        $this->address->street = '555 Street';
    }

    public function dispatchThing()
    {
        $this->address->street = '556 Street';
        $this->dispatch('run-action', $this->address);
    }

    #[On('run-action')]
    public function dispatchedEvent(Address $address)
    {
        //        dd($address);
        //        dd(debug_backtrace());
        //        dump('fin', $address);
        //        $address['city'] = 'Town';
        //        $this->address = new Address();
    }

    public function render()
    {
        return view('livewire.component-b');
    }
}
