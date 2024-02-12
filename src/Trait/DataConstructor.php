<?php

namespace LaravelBot\BotFather\Trait;

trait DataConstructor
{
    private mixed $data;
    private array $error;

    public function __construct($data, $error = [])
    {
        $this->data = $data;
        $this->error = $error;
    }
    public function GetData(): array
    {
        return $this->data;
    }
    public function GetJson(): string|false
    {
        return json_encode($this->data);
    }

    public function IsEmpty(): bool
    {
        return empty($this->data);
    }

    public function IsNotEmpty(): bool
    {
        return !$this->IsEmpty();
    }

    public function HasError(): bool
    {
        return !$this->NotError();
    }
    public function NotError(): bool
    {
        return empty($this->error);
    }
    public function GetErrorCode(): int|null
    {
        return $this->error[0] ?? null;
    }
    public function GetErrorMessage(): string|null
    {
        return $this->error[1] ?? null;
    }
}

