<?php

namespace App;

use Livewire\Attributes\Rule;
use Livewire\Mechanisms\HandleComponents\ComponentContext;
use Livewire\Mechanisms\HandleComponents\Synthesizers\Synth;
use ReflectionClass;

class AddressSynth extends Synth
{
    public static $key = 'address';

    public function __construct(ComponentContext $context, $path)
    {
        $reflectionClass = new ReflectionClass(Address::class);
        $rules = collect($reflectionClass->getProperties())->flatMap(function ($property) {
            $attributes = $property->getAttributes(Rule::class);
            $key = 'form.'.self::$key.'.'.$property->name;
            if (empty($attributes)) {
                return false;
            }
            $rules = $attributes[0]->getArguments();

            if (empty($rules)) {
                return false;
            }

            if (is_array($rules[0])) {
                $rules = implode(',', $rules[0]);
            }

            return [$key => $rules];
        })->filter()->toArray();

        $address = new Address;
        if ($rules) {
            $context->component->addRulesFromOutside($rules);
        }

        $context->component->addValidationAttributesFromOutside($address->attributes());
        $context->component->addMessagesFromOutside($address->messages());
        parent::__construct($context, $path);
    }

    public static function match($target)
    {
        return $target instanceof Address;
    }

    public function dehydrate($target)
    {
        return [[
            'street' => $target->street,
            'city' => $target->city,
            'state' => $target->state,
            'zip' => $target->zip,
        ], []];
    }

    public function hydrate($value)
    {
        $instance = new Address;

        $instance->street = $value['street'];
        $instance->city = $value['city'];
        $instance->state = $value['state'];
        $instance->zip = $value['zip'];

        return $instance;
    }

    public function get(&$target, $key)
    {
        return $target->{$key};
    }

    public function set(&$target, $key, $value)
    {
        $target->{$key} = $value;
    }
}
