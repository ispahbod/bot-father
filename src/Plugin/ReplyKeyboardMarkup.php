<?php

namespace LaravelBot\BotFather\Plugin;

use LaravelBot\BotFather\Constant\ReplyKeyboardMarkupConfig;

class ReplyKeyboardMarkup
{
    public static function Create($array, $config = []): array
    {
        if (!isset($config[ReplyKeyboardMarkupConfig::RESIZE_KEYBOARD])) {
            $config[ReplyKeyboardMarkupConfig::RESIZE_KEYBOARD] = true;
        }
        if (isset($array[0][0])) {
            return array_merge(['keyboard' => $array], $config);
        } else {
            return array_merge(['keyboard' => [$array]], $config);
        }
    }

    public static function Row($array, $exp = true): array
    {
        return $exp ? $array : [];
    }

    public static function Keyboard($array, $exp = true): array
    {
        return $exp ? $array : [];
    }
}
