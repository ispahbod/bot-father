<?php

namespace Ispahbod\BotFather\Trait;

trait TokenConstructor
{
    private string $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }
}