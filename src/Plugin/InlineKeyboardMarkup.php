<?php

namespace LaravelBot\BotFather\Plugin;

use LaravelBot\BotFather\Constant\InlineKeyboardMarkupConfig;
use LaravelBot\BotFather\Helper\ArrayDirManipulator;

class InlineKeyboardMarkup
{
    public static function Create(array $array, $config = []): string
    {
        $array = isset($array[0][0]) ? $array : [$array];
        $dir = InlineKeyboardMarkupConfig::DIRECTION;
        if (isset($config[$dir])) {
            ArrayDirManipulator::ManipulateArray($array,$config,$dir);
        }
        return json_encode(['inline_keyboard' => $array]);
    }

    public static function Row(array $array,bool $exp = true): array
    {
        return $exp ? $array : [];
    }

    public static function Keyboard($array,bool $exp = true): array
    {
        return $exp ? $array : [];
    }

    public static function Empty(): string
    {
        return json_encode(['inline_keyboard' => []]);
    }
}
