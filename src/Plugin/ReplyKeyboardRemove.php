<?php

namespace LaravelBot\BotFather\Plugin;

class ReplyKeyboardRemove
{
    public static function Create(array $config)
    {
        return array_merge(['remove_keyboard' => true], $config);
    }
}
