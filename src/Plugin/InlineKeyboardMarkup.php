<?php

namespace Ispahbod\BotFather\Plugin;

use Ispahbod\BotFather\Constant\InlineKeyboardMarkupConfig;
use Ispahbod\BotFather\Constant\ReplyKeyboardMarkupConfig;
use Ispahbod\BotFather\Helper\ArrayDirManipulator;

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
    public static function CreateGrid($grids, $config = []): string
    {
        $dir = ReplyKeyboardMarkupConfig::DIRECTION;
        if (isset($config[$dir])) {
            ArrayDirManipulator::ManipulateArray($grids, $config, $dir);
        }
        $mergedArray = call_user_func_array('array_merge', $grids);
        return json_encode(array_merge(['inline_keyboard' => $mergedArray], $config));
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
