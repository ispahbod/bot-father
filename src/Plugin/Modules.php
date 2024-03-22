<?php

namespace Ispahbod\BotFather\Plugin;

class Modules
{
    private Handlers $handlers;
    public Commands $commands;

    public function __construct()
    {
        $this->handlers = new Handlers();
        $this->commands = new Commands();
    }

    public function Create(string $name, $value = null, callable $callback, bool $exp = true): self
    {
        $this->commands->SetCommand($name, $value);
        $this->handlers->SetHandler($name, $callback, $exp);
        return $this;
    }

    public function GetCommand($text): array
    {
        return $this->commands->GetCommand($text);
    }


    public function Run(string $input, $arg = []): bool
    {
        return $this->handlers->Run($input, $arg);
    }
}
