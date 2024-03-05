<?php

namespace Ispahbod\BotFather\Trait;

trait DataTokenConstructor
{
    private string $token;
    private array $data;
    public function __construct(string $token, array $data)
    {
        $this->token = $token;
        $this->data = $data;
    }
}
