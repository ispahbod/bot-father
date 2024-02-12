<?php

namespace Ispahbod\BotFather\Http;

class HttpResponse
{
    public array $response = [];

    public function __construct($response)
    {
        $this->response = $response;
    }

    public function GetStatusCode(): float
    {
        return $this->response['code'];
    }

    public function GetTime(): float
    {
        return $this->response['time'] ?? 0;
    }

    public function IsSuccess(): bool
    {
        return $this->response['content']['ok'] ?? false;
    }

    public function HasError(): bool
    {
        return isset($this->response['content']['error']);
    }

    public function GetContent(): array
    {
        return $this->response['content']['result'] ?? [];
    }

    public function GetJson(): string|false
    {
        return json_encode($this->response['content']['result']);
    }
}