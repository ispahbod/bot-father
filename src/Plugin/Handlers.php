<?php

namespace LaravelBot\BotFather\Plugin;

class Handlers
{
<<<<<<< HEAD
    public function Handler($name,$callback)
    {

    }
}
=======
    private $handlers = [];

    public function Handler($name, $callback)
    {
        if (is_callable($callback)) {
            $this->handlers[$name] = $callback;
        }
    }

    public function Run($name)
    {
        return call_user_func($this->handlers[$name]);
    }
}
>>>>>>> origin/main