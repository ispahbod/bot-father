<?php

namespace Ispahbod\BotFather\Plugin;

class ReplyKeyboardRemove
{
    public static function create(array $config = []): string
    {
        return json_encode(array_merge(['remove_keyboard' => true], $config));
    }
}
