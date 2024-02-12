<?php

namespace LaravelBot\BotFather\Plugin;

class ReplyKeyboardMarkup
{
    public static function Create($array, $config = []): array
    {
        if (isset($array[0][0])){
            return array_merge(['keyboard' => $array], $config);
        }else{
            return array_merge(['keyboard' => [$array]], $config);
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
