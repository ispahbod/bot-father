<?php

namespace Ispahbod\BotFather\Trait;

trait DataConstructor
{
    private mixed $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function containsError(): bool
    {
        return !empty($this->data['error_code']);
    }
    public function containsNoError(): bool
    {
        return !$this->containsError();
    }

    public function retrieveData(): array
    {
        return $this->data;
    }

    public function encodeDataToJson(): string|false
    {
        return json_encode($this->data, JSON_THROW_ON_ERROR);
    }

    public function fetchErrorCode(): ?int
    {
        return $this->data['error_code'] ?? null;
    }

    public function fetchErrorMessage(): ?string
    {
        return $this->data['description'] ?? null;
    }
    public function getResult(): ?array
    {
        return $this->data ?? null;
    }
}

