<?php

namespace Ispahbod\BotFather\Http;

class HttpResponse
{
    public array $response = [];

    public function __construct($response)
    {
        $this->response = $response;
    }

    public function getErrorCode(): ?int
    {
        return $this->response['content']['error_code'] ?? null;
    }

    public function getErrorMessage(): ?string
    {
        return $this->response['content']['description'] ?? null;
    }

    public function getStatusCode(): float
    {
        return $this->response['code'];
    }

    public function getTime(): float
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

    public function getContent(): array|string|bool
    {
        return $this->response['content']['result'] ?? false;
    }

    public function getFirstContent(): array|string|bool
    {
        return !empty($this->response['content']['result']) ? reset($this->response['content']['result']) : false;
    }

    public function getLastContent(): array|string|bool
    {
        return !empty($this->response['content']['result']) ? end($this->response['content']['result']) : false;
    }

    public function getJson(): string|false
    {
        return !empty($this->response['content']['result']) ? json_encode($this->response['content']['result'], JSON_THROW_ON_ERROR) : false;
    }
}
