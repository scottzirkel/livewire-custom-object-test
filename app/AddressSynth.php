<?php

namespace App;

use Livewire\Mechanisms\HandleComponents\Synthesizers\Synth;

class AddressSynth extends Synth
{
    public static $key = 'address';

    public static function match($target)
    {
        return $target instanceof Address;
    }

    public function dehydrate($target)
    {
        //        dump('dehydrate', $target);

        return [[
            'street' => $target->street,
            'city' => $target->city,
            'state' => $target->state,
            'zip' => $target->zip,
        ], []];
    }

    public function hydrate($value)
    {
        //        dump($value);
        $instance = new Address;

        $instance->street = $value['city'];
        $instance->city = $value['city'];
        $instance->state = $value['state'];
        $instance->zip = $value['zip'];

        return $instance;
    }

    public function get(&$target, $key)
    {
        dump('get');

        return $target->{$key};
    }

    public function set(&$target, $key, $value)
    {
        dump('set');
        $target->{$key} = $value;
    }
}
