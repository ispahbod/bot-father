<?php

namespace Ispahbod\BotFather\Trait;

use Ispahbod\BotFather\Http\Http;

trait HttpResponseApiMethod
{
    private function HttpResponseApiMethod($method, $data = []): array
    {
        $http = Http::Request($this->token, $method, $data);
        $errors = $http->IsSuccess() ? [] : [$http->GetErrorCode(), $http->GetErrorMessage()];
        return [$http->GetContent(), $errors];
    }
}
