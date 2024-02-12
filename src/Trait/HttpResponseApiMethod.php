<?php

namespace LaravelBot\BotFather\Trait;

use Ispahbod\BotFather\Constant\ApiMethod;
use Ispahbod\BotFather\Http\Http;
use Ispahbod\BotFather\Type\Message;

trait HttpResponseApiMethod
{
    private function HttpResponseApiMethod($method, $data = []): array
    {
        $http = Http::Request($this->token, $method, $data);
        $errors = $http->IsSuccess() ? [] : [$http->GetErrorCode(), $http->GetErrorMessage()];
        return [$http->GetContent(), $errors];
    }
}
