<?php

namespace LaravelBot\BotFather\Plugin;

use LaravelBot\BotFather\Constant\ReplyKeyboardMarkupConfig;
use LaravelBot\BotFather\Helper\ArrayManipulator;

class ReplyKeyboardMarkup
{
    public static function Create($array, $config = []): string
    {
        if (!isset($config[ReplyKeyboardMarkupConfig::RESIZE_KEYBOARD])) {
            $config[ReplyKeyboardMarkupConfig::RESIZE_KEYBOARD] = true;
        }
        $array = isset($array[0][0]) ? $array : [$array];
        $dir = ReplyKeyboardMarkupConfig::DIRECTION;
        if (isset($config[$dir])) {
            ArrayManipulator::ManipulateArray($array, $config, $dir);
        }
        return json_encode(array_merge(['keyboard' => $array], $config));
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
