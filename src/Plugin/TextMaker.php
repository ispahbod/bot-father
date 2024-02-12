<?php

namespace LaravelBot\BotFather\Plugin;

class TextMaker
{
    public static function NewLine(): string
    {
        return "\n";
    }

    public static function NewDoubleLine(): string
    {
        return "\n\n";
    }

    public static function Line(...$string): string
    {
        return implode(' ', $string) . "\n";
    }
    public static function Text($string): string
    {
        return $string;
    }

    public static function Make($array): string
    {
        return implode('', $array);
    }
}
