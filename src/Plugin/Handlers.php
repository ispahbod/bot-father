<?php

namespace Ispahbod\BotFather\Plugin;

class Handlers
{
    private array $handlers = [];

    public function setHandler(string $name, callable $callback, bool $exp = true): void
    {
        if (is_callable($callback) && $exp) {
            $this->handlers[$name] = $callback;
        }
    }

    public function setHandlers(array $handlers, bool $exp = true): void
    {
        if ($exp){
            foreach ($handlers as $name => $callback) {
                if (is_callable($callback)) {
                    $this->handlers[$name] = $callback;
                }
            }
        }
    }

    public function run(string $name, ...$args): bool
    {
        if (isset($this->handlers[$name])) {
            call_user_func($this->handlers[$name], ...$args);
            return true;
        } else {
            return false;
        }
    }
}
