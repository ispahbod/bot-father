<?php

namespace LaravelBot\BotFather;

use LaravelBot\BotFather\Class\Getter;
use LaravelBot\BotFather\Class\Process;
use LaravelBot\BotFather\Class\Sender;
use LaravelBot\BotFather\Class\Update;
use LaravelBot\BotFather\Class\Webhook;

class BotFather
{
    public static function Sender(string $token): Sender
    {
        return new Sender($token);
    }

    public static function Getter(string $token): Getter
    {
        return new Getter($token);
    }

    public static function Update(string $token): Update
    {
        return new Update($token);
    }

    public static function Webhook(string $token): Webhook
    {
        return new Webhook($token);
    }

    public static function Process($json): Process
    {
        return new Process($json);
    }
}