<?php

namespace Ispahbod\BotFather\Trait;

use Ispahbod\BotFather\Http\Http;

trait HttpResponseApiMethod
{
    private function httpResponseApiMethod($method, $data = []): array
    {
        $http = Http::request($this->token, $method, $data);
        $content = $http->getContent();
        return array_merge(is_string($content) ? ['content' => $content] : $content, [
            'error_code' => $http->getErrorCode(),
            'description' => $http->getErrorMessage(),
        ]);
    }
}
