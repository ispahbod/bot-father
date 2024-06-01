<?php

namespace Ispahbod\BotFather\Plugin;

class ReplyKeyboardRemove
{
    public static function create(array $config = []): array
    {
        return array_merge(['remove_keyboard' => true], $config);
    }
}
