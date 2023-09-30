<?php

namespace App\Livewire;

use App\Address;
use App\Livewire\Forms\AddressForm;
use Livewire\Component;

class ComponentD extends Component
{
    public AddressForm $form;

    public function boot()
    {
        //        $this->withValidator(function ($validator) {
        //            $this->form->address->validate($this->form->address);
        //            //            $validator->after(function ($validator) {
        //            //                dd($validator);
        //            //            });
        //        });
    }

    public function mount()
    {
        $address = new Address;
        $address->street = '';
        $address->city = 'Town';
        $address->state = 'State';
        $address->zip = 'zip';
        $this->form->setAddress($address);
    }

    public function save()
    {
        $this->form->update();
        //        $address = (new Address())->fromArray($this->form->address);
    }

    public function render()
    {
        return view('livewire.component-d');
    }
}
