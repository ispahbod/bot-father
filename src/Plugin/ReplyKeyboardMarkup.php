<?php

namespace Ispahbod\BotFather\Plugin;

use Ispahbod\BotFather\Constant\ReplyKeyboardMarkupConfig;
use Ispahbod\BotFather\Helper\ArrayDirManipulator;

class ReplyKeyboardMarkup
{
    public static function create($array, $config = []): array
    {
        if (!isset($config[ReplyKeyboardMarkupConfig::RESIZE_KEYBOARD])) {
            $config[ReplyKeyboardMarkupConfig::RESIZE_KEYBOARD] = true;
        }
        $array = isset($array[0][0]) ? $array : [$array];
        $dir = ReplyKeyboardMarkupConfig::DIRECTION;
        if (isset($config[$dir])) {
            ArrayDirManipulator::ManipulateArray($array, $config, $dir);
        }
        return array_merge(['keyboard' => $array], $config);
    }

    public static function createGrid($grids, $config = []): array
    {
        if (!isset($config[ReplyKeyboardMarkupConfig::RESIZE_KEYBOARD])) {
            $config[ReplyKeyboardMarkupConfig::RESIZE_KEYBOARD] = true;
        }
        $dir = ReplyKeyboardMarkupConfig::DIRECTION;
        if (isset($config[$dir])) {
            ArrayDirManipulator::ManipulateArray($grids, $config, $dir);
        }
        $mergedArray = array_merge(...$grids);
        return array_merge(['keyboard' => $mergedArray], $config);
    }

    public static function row($array, $condition = true): array
    {
        return $condition ? $array : [];
    }

    public static function order(array $array, int $order): array
    {
        return ['array' => $array, 'order' => $order];
    }

    public static function custom_array_chunk(array $array, array $chunk_lengths): array
    {
        $result = [];
        $total_items = count($array);
        $total_orders = array_sum($chunk_lengths);
        $offset = 0;
        foreach ($chunk_lengths as $length) {
            $chunk = array_slice($array, $offset, $length);
            if (!empty($chunk)) {
                $result[] = $chunk;
                $offset += $length;
            }
        }
        $remaining_items_count = $total_items - $offset;
        $remaining_chunks_count = ceil($remaining_items_count / $chunk_lengths[count($chunk_lengths) - 1]);
        $remaining_items_offset = $offset;
        for ($i = 0; $i < $remaining_chunks_count; $i++) {
            $remaining_chunk_length = min($chunk_lengths[count($chunk_lengths) - 1], $remaining_items_count);
            $remaining_chunk = array_slice($array, $remaining_items_offset, $remaining_chunk_length);
            if (!empty($remaining_chunk)) {
                $result[] = $remaining_chunk;
                $remaining_items_offset += $remaining_chunk_length;
                $remaining_items_count -= $remaining_chunk_length;
            }
        }

        return $result;
    }

    public static function grid(array $array, int|array $orders = 1, $condition = true): array
    {
        if (!$condition) {
            return [];
        }
        if (is_int($orders)) {
            $orders = [$orders];
        }
        $array_len = count($array);
        $orderCounter = 1;
        foreach ($array as &$item) {
            if (!isset($item['order'])) {
                $item['order'] = $orderCounter++;
            } elseif ($item['order'] < 0) {
                $item['order'] = $array_len + $item['order'] + 1;
            }
        }
        usort($array, function ($a, $b) {
            return $a['order'] - $b['order'];
        });
        foreach ($array as &$item) {
            if (isset($item['array'])) {
                $item = $item['array'];
            } else {
                unset($item['order']);
            }
        }
        $array = array_filter($array);
        return self::custom_array_chunk($array, $orders);
    }

    public static function keyboard($array, $condition = true): array
    {
        return $condition ? $array : [];
    }

    public static function doubleKeyboard($array1, $array2, bool $condition = true): array
    {
        return $condition ? self::Row([
            self::Keyboard($array1),
            self::Keyboard($array2),
        ]) : [];
    }

    public static function tripleKeyboard($array1, $array2, $array3, bool $condition = true): array
    {
        return $condition ? self::Row([
            self::Keyboard($array1),
            self::Keyboard($array2),
            self::Keyboard($array3),
        ]) : [];
    }
}
