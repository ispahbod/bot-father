<?php

namespace LaravelBot\BotFather\Helper;

use LaravelBot\BotFather\Plugin\Direction;

class ArrayManipulator
{
    public static function ManipulateArray(&$array, $config, $dir): void
    {
        if ($config[$dir] === Direction::RTL) {
            foreach ($array as $key => $obj) {
                $array[$key] = array_reverse($obj);
            }
        } elseif ($config[$dir] === Direction::SHUFFLE) {
            shuffle($array);
            foreach ($array as $key => $obj) {
                shuffle($array[$key]);
            }
        } elseif ($config[$dir] === Direction::SHUFFLE_COLUMN) {
            shuffle($array);
        } elseif ($config[$dir] === Direction::SHUFFLE_ROW) {
            foreach ($array as $key => $obj) {
                shuffle($array[$key]);
            }
        }
        unset($config[$dir]);
    }
}