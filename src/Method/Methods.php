<?php

namespace Ispahbod\BotFather\Method;

use Ispahbod\BotFather\Http\Http;
use Ispahbod\BotFather\Trait\HttpResponseApiMethod;
use Ispahbod\BotFather\Type\User;

class Methods
{
    use HttpResponseApiMethod;

    private string $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public function getMe()
    {
        $res = Http::Request($this->token, 'getMe');
        return new User($res);
    }
}