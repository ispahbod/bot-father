<?php

namespace LaravelBot\BotFather\Plugin;

class InlineKeyboardMarkup
{
    public static function Create($array): string
    {
        return json_encode(isset($array[0][0]) ? ['inline_keyboard' => $array] : ['inline_keyboard' => [$array]]);
    }

    public static function Row($array, $exp = true): array
    {
        return $exp ? $array : [];
    }

    public static function Keyboard($array, $exp = true): array
    {
        return $exp ? $array : [];
    }

    public static function Empty(): string
    {
        return json_encode(['inline_keyboard' => []]);
    }
}
