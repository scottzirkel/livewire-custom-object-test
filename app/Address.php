<?php

namespace App;

use Illuminate\Support\Facades\Validator;
use Livewire\Attributes\Rule;

class Address
{
    #[Rule(['required, min:3'])]
    public string $street = '';

    #[Rule('required')]
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

    //    public function rules()
    //    {
    //        return ['form.address.street' => 'required|min:3'];
    //    }

    public function attributes()
    {
        return ['form.address.street' => 'street'];
    }

    public function messages()
    {
        return ['required' => 'The :attribute field is required'];
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
