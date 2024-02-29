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

    public static function MultiLine($array): string
    {
        return implode("\n", $array);
    }

    public static function Repeat($text, $number): string
    {
        return str_repeat($text, $number);
    }

    public static function RepeatLine(string $text, $number): string
    {
        $output = '';
        for ($i = 1; $i <= $number; $i++) {
            $output .= ($i === $number) ? $text : $text . "\n";
        }
        return $output;
    }

    public static function Line(...$string): string
    {
        return implode(' ', $string) . "\n";
    }

    public static function LineLn(...$string): string
    {
        return implode(' ', $string) . "\n\n";
    }

    public static function LineBln(...$string): string
    {
        return "\n" . implode(' ', $string) . "\n";
    }

    public static function Text(...$string): string
    {
        return implode(' ', $string);
    }

    public static function Bold(...$string): string
    {
        $string = implode(' ', $string);
        return "<b>$string</b>";
    }

    public static function Italic(...$string): string
    {
        $string = implode(' ', $string);
        return "<i>$string</i>";
    }

    public static function Underline(...$string): string
    {
        $string = implode(' ', $string);
        return "<u>$string</u>";
    }

    public static function Strike(...$string): string
    {
        $string = implode(' ', $string);
        return "<strike>$string</strike>";
    }

    public static function Spoiler(...$string): string
    {
        $string = implode(' ', $string);
        return "<tg-spoiler>$string</tg-spoiler>";
    }

    public static function Link($string, $href): string
    {
        $string = is_array($string) ? implode(' ', $string) : $string;
        return "<a href='$href'>$string</a>";
    }

    public static function Emoji($string, $emojiId): string
    {
        return "<tg-emoji emoji-id='$emojiId'>$string</tg-emoji>";
    }

    public static function Code($string, $language = ''): string
    {
        return "<code class='language-$language'>$string</code>";
    }

    public static function Pre(...$string): string
    {
        $string = implode(' ', $string);
        return "<pre>$string</pre>";
    }

    public static function Blockquote(...$string): string
    {
        $string = implode(' ', $string);
        return "<blockquote>$string</blockquote>";
    }

    public static function Make($array): string
    {
        return implode('', $array);
    }

    public static function If(bool $exp, string $if, $else = null)
    {
        return $exp ? $if : $else;
    }
}
