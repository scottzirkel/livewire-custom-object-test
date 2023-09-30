<?php

namespace App\Livewire\Forms;

use App\Address;
use Livewire\Attributes\Rule;
use Livewire\Form;

class AddressForm extends Form
{
    #[Rule('required')]
    public string $title;

    public Address $address;

    public function rules()
    {
        return ['title' => 'required'];
    }

    public function setAddress(Address $address)
    {
        $this->address = $address;
        //        $this->address = $address->toArray();
    }

    public function update()
    {
        //        dd($this);
        //
        //        dd($this->component);
        //        $this->component->addRulesFromOutside(function () {
        //            $rules = [];
        //
        //            if (method_exists($this, 'rules')) {
        //                $rules = $this->rules();
        //            } elseif (property_exists($this, 'rules')) {
        //                $rules = $this->rules;
        //            }
        //
        //            return $this->getAttributesWithPrefixedKeys($rules);
        //        });
        // Both validations work, but if there's a failure in the first,
        // it doesn't run the object validation, so it ends up as a multi-stage validation
        // Not great, especially if you have multiple DTOs...
        $this->validate();
        //        $this->address->validate($this);
    }
}
