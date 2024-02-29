<?php

namespace LaravelBot\BotFather\Plugin;

class Handlers
{
    private array $handlers = [];
    public function Handler(string $name, callable $callback): void
    {
        if (is_callable($callback)) {
            $this->handlers[$name] = $callback;
        }
    }
    public function Run(string $name, ...$args): mixed
    {
        if (isset($this->handlers[$name])) {
            return call_user_func($this->handlers[$name], ...$args);
        }
    }
}
