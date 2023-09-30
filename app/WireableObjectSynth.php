<?php

namespace App;

use Livewire\Mechanisms\HandleComponents\Synthesizers\Synth;

class WireableObjectSynth extends Synth
{
    public static $key = 'wo';

    public static function match($target): bool
    {
        return $target instanceof WireableObject;
    }

    public function dehydrate($target, $dehydrateChild)
    {
        dd('dehydrate', $target);
    }

    public function hydrate($value, $meta, $hydrateChild)
    {
        dd('hydrate', $value);
    }

    public function get(&$target, $key)
    {
        dd('get', $target, $key);
    }

    public function set(&$target, $key, $value)
    {
        dd('set', $target, $key, $value);
    }
}
