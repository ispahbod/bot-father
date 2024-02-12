<?php

namespace Ispahbod\BotFather\Class;

use Ispahbod\BotFather\Constant\ApiMethod;
use Ispahbod\BotFather\Http\Http;
use Ispahbod\BotFather\Trait\TokenConstructor;
use Ispahbod\BotFather\Type\User;

class Getter
{
    use TokenConstructor;

    public function GetMe(): User|bool
    {
        $response = Http::Request($this->token, ApiMethod::GET_ME);
        if ($response->IsSuccess()) {
            return new User($response->GetContent());
        }
        return false;
    }
}