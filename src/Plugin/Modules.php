<?php

namespace Ispahbod\BotFather\Plugin;

class Modules
{
    private Handlers $handlers;
    private Commands $commands;

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

    public function Run(string $input, $arg = []): bool
    {
        if (empty($arg)) {
            list($command, $parameters) = $this->commands->GetCommand($input);
            return $this->handlers->Run($command, $parameters);
        } else {
            return $this->handlers->Run($input, $arg);
        }
    }
}
