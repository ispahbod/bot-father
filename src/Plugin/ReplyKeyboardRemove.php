<?php

namespace Ispahbod\BotFather\Plugin;

class ReplyKeyboardRemove
{
    public static function Create(array $config = []): string
    {
        return json_encode(array_merge(['remove_keyboard' => true], $config));
    }
}
