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

    public function create(string $name, $value = null, callable $callback, bool $exp = true): self
    {
        $this->commands->setCommand($name, $value ?: $name);
        $this->handlers->setHandler($name, $callback, $exp);
        return $this;
    }

    public function getCommand($text): array
    {
        return $this->commands->getCommand($text);
    }


    public function run($input = '', ...$arg): bool
    {
        return $this->handlers->run($input, ...$arg);
    }
}
