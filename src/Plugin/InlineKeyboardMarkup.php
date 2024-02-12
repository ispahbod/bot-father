<?php

namespace LaravelBot\BotFather\Plugin;

class InlineKeyboardMarkup
{
    public static function Create($array): array
    {
        if (isset($array[0][0])){
            return ['inline_keyboard' => $array];
        }else{
            return ['inline_keyboard' => [$array]];
        }
    }

    public static function Row($array): array
    {
        return $array;
    }

    public static function Keyboard($array): array
    {
        return $array;
    }
}
