<?php

namespace Ispahbod\BotFather\Trait;

use Ispahbod\BotFather\Http\Http;

trait HttpResponseApiMethod
{
    private function httpResponseApiMethod($method, $data = []): array
    {
        try {
            $http = Http::request($this->token, $method, $data);
            if ($http->isSuccess()) {
                $content = $http->getContent();
                $response = is_string($content) ? ['content' => $content] : $content;
            } else {
                $response = [
                    'error_code' => $http->getErrorCode(),
                    'description' => $http->getErrorMessage(),
                ];
            }
        } catch (\Exception $e) {
            $response = [
                'error_code' => 500,
                'description' => 'Internal Server Error: ' . $e->getMessage(),
            ];
        }
        if ($response === true || $response === false) {
            $response = [];
        }
        return $response;
    }
}
