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
    public function Create(string $name, string|array $value, callable $callback, bool $exp = true): self
    {
        $this->commands->SetCommand($name, $value);
        $this->handlers->SetHandler($name, $callback, $exp);
        return $this;
    }
    public function Run(string $input, ...$args): bool
    {
        list($command, $parameters) = $this->commands->GetCommand($input);
        if (isset($this->handlers[$command])) {
            call_user_func($this->handlers[$command], ...$args);
            return true;
        } else {
            return false;
        }
    }
}