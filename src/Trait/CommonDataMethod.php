<?php

namespace LaravelBot\BotFather\Trait;

trait CommonDataMethod
{
    public function GetJson():string|false
    {
        return json_encode($this->data);
    }
}