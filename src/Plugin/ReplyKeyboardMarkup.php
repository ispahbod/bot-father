<?php

namespace Ispahbod\BotFather\Plugin;

use Ispahbod\BotFather\Constant\ReplyKeyboardMarkupConfig;
use Ispahbod\BotFather\Helper\ArrayDirManipulator;

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
            ArrayDirManipulator::ManipulateArray($array, $config, $dir);
        }
        return json_encode(array_merge(['keyboard' => $array], $config));
    }

    public static function CreateGrid($grids, $config = []): string
    {
        if (!isset($config[ReplyKeyboardMarkupConfig::RESIZE_KEYBOARD])) {
            $config[ReplyKeyboardMarkupConfig::RESIZE_KEYBOARD] = true;
        }
        $dir = ReplyKeyboardMarkupConfig::DIRECTION;
        if (isset($config[$dir])) {
            ArrayDirManipulator::ManipulateArray($grids, $config, $dir);
        }
        $mergedArray = call_user_func_array('array_merge', $grids);
        return json_encode(array_merge(['keyboard' => $mergedArray], $config));
    }

    public static function Row($array, $exp = true): array
    {
        return $exp ? $array : [];
    }

    public static function Grid($array, int|array $orders = 1): array
    {
        $array = array_filter($array);
        if (is_int($orders)) {
            $result = self::Row(array_chunk($array, $orders));
        } else {
            $result = [];
            $index = 0;
            foreach ($orders as $order) {
                $result[] = self::Row(array_slice($array, $index, $order));
                $index += $order;
            }
        }
        return $result;
    }

    public static function Keyboard($array, $exp = true): array
    {
        return $exp ? $array : [];
    }
}
