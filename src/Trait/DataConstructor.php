<?php

namespace Ispahbod\BotFather\Trait;

trait DataConstructor
{
    private mixed $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
}