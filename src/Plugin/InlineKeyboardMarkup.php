<?php

namespace LaravelBot\BotFather\Plugin;

use LaravelBot\BotFather\Constant\InlineKeyboardMarkupConfig;

class InlineKeyboardMarkup
{
    public static function Create($array, $config = []): string
    {
        $array = isset($array[0][0]) ? $array : [$array];
        $dir = InlineKeyboardMarkupConfig::DIRECTION;
        if (isset($config[$dir])) {
            if ($config[$dir] === Direction::RTL) {
                foreach ($array as $key => $obj) {
                    $array[$key] = array_reverse($obj);
                }
            } elseif ($config[$dir] === Direction::SHUFFLE) {
                shuffle($array);
                foreach ($array as $key => $obj) {
                    $array[$key] = shuffle($obj);
                }
            } elseif ($config[$dir] === Direction::SHUFFLE_COLUMN) {
                shuffle($array);
            } elseif ($config[$dir] === Direction::SHUFFLE_ROW) {
                foreach ($array as $key => $obj) {
                    $array[$key] = shuffle($obj);
                }
            }
            unset($config[$dir]);
        }
        return json_encode(['inline_keyboard' => $array]);
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
