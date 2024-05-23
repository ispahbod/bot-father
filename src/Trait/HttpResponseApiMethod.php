<?php

namespace Ispahbod\BotFather\Trait;

use Ispahbod\BotFather\Http\Http;

trait HttpResponseApiMethod
{
    private function HttpResponseApiMethod($method, $data = []): array
    {
        $http = Http::request($this->token, $method, $data);
        return array_merge($http->getContent(),[
            'error_code'=>$http->getErrorCode(),
            'description'=>$http->getErrorMessage(),
        ]);
    }
}
