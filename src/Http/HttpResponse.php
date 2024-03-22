<?php

namespace Ispahbod\BotFather\Http;

class HttpResponse
{
    public array $response = [];

    public function __construct($response)
    {
        $this->response = $response;
    }

    public function GetErrorCode(): int|false
    {
        return $this->response['content']['error_code'] ?? false;
    }

    public function GetErrorMessage(): string|false
    {
        return $this->response['content']['description'] ?? false;
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

    public function GetContent(): array|bool
    {
        return $this->response['content']['result'] ?? false;
    }

    public function GetFirstContent(): array|false
    {
        return !empty($this->response['content']['result']) ? reset($this->response['content']['result']) : false;
    }

    public function GetLastContent(): array|false
    {
        return !empty($this->response['content']['result']) ? end($this->response['content']['result']) : false;
    }

    public function GetJson(): string|false
    {
        return !empty($this->response['content']['result']) ? json_encode($this->response['content']['result']) : false;
    }
}
