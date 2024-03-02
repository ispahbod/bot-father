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

    public function Handlers(array $handlers): void
    {
        foreach ($handlers as $name => $callback) {
            if (is_callable($callback)) {
                $this->handlers[$name] = $callback;
            }
        }
    }

    public function Run(string $name, ...$args): bool
    {
        if (isset($this->handlers[$name])) {
            call_user_func($this->handlers[$name], ...$args);
            return true;
        } else {
            return false;
        }
    }
}
