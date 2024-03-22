<?php

namespace Ispahbod\BotFather\Helper;

use Ispahbod\BotFather\Plugin\Direction;

class ArrayDirManipulator
{
    public static function ManipulateArray(&$array, $config, $dir): void
    {
        switch ($config[$dir]) {
            case Direction::RTL:
                self::reverseArrayItems($array);
                break;
            case Direction::SHUFFLE:
                self::shuffleArrayAndItems($array);
                break;
            case Direction::SHUFFLE_COLUMN:
                shuffle($array);
                break;
            case Direction::SHUFFLE_ROW:
                self::shuffleArrayItems($array);
                break;
        }
        unset($config[$dir]);
    }

    private static function reverseArrayItems(&$array): void
    {
        foreach ($array as $index => $obj) {
            foreach ($obj as $key => $items) {
                $array[$index][$key] = array_reverse($items);
            }
        }
    }

    private static function shuffleArrayAndItems(&$array): void
    {
        shuffle($array);
        foreach ($array as $key => $obj) {
            shuffle($array[$key]);
        }
    }

    private static function shuffleArrayItems(&$array): void
    {
        foreach ($array as $key => $obj) {
            shuffle($array[$key]);
        }
    }
}

