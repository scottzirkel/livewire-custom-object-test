<?php

namespace App;

use Illuminate\Support\Facades\Validator;

class Address
{
    public string $street;

    public $city = '';

    public $state = '';

    public $zip = '';

    public function toArray()
    {
        return [
            'street' => $this->street,
            'city' => $this->city,
            'state' => $this->state,
            'zip' => $this->zip,
        ];
    }

    public function fromArray(array $value)
    {
        $instance = new self;
        $instance->street = $value['street'];
        $instance->city = $value['city'];
        $instance->state = $value['state'];
        $instance->zip = $value['zip'];

        return $instance;
    }

    public function validate($formData)
    {
        return Validator::make(
            // Data to validate...
            ['form.address.street' => $formData->street],

            // Validation rules to apply...
            ['form.address.street' => 'required|min:3'],

            // Custom validation messages...
            ['required' => 'The :attribute field is required'],

            ['form.address.street' => 'street']
        )->validate();
    }
}
