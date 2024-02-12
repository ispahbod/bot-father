<?php

namespace LaravelBot\BotFather\Class;

use LaravelBot\BotFather\Constant\ApiMethod;
use LaravelBot\BotFather\Http\Http;
use LaravelBot\BotFather\Trait\TokenConstructor;
use LaravelBot\BotFather\Type\User;

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