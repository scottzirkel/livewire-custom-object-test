<?php

namespace App;

class WireableObject
{
    public function __construct(
        public string $name = 'default'
    ) {
    }
    //
    //    public function toLivewire(): array
    //    {
    //        return [
    //            'name' => $this->name,
    //        ];
    //    }
    //
    //    public static function fromLivewire($value): self
    //    {
    //        $name = $value['name'];
    //
    //        return new static($name);
    //    }
}
