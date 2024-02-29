<?php

namespace LaravelBot\BotFather\Plugin;

class TextMaker
{
    public static function If(bool $exp, string $if, string $else = ''): string
    {
        return $exp ? $if : $else;
    }
    public static function Pre(...$string): string
    {
        $string = implode(' ', $string);
        return "<pre>$string</pre>";
    }
    public static function Code(string $string, string $language = ''): string
    {
        return "<code class='language-$language'>$string</code>";
    }
    public static function Link(mixed $input, string $href): string
    {
        $string = is_array($input) ? implode(' ', $input) : $input;
        return "<a href='$href'>$string</a>";
    }
    public static function Make(array $array): string
    {
        return implode('', $array);
    }
    public static function Bold(...$string): string
    {
        $string = implode(' ', $string);
        return "<b>$string</b>";
    }
    public static function Line(...$string): string
    {
        return implode(' ', $string) . "\n";
    }
    public static function Text(...$string): string
    {
        return implode(' ', $string);
    }
    public static function Emoji(string $string, string $emojiId): string
    {
        return "<tg-emoji emoji-id='$emojiId'>$string</tg-emoji>";
    }
    public static function LineLn(...$string): string
    {
        return implode(' ', $string) . "\n\n";
    }
    public static function Repeat(string $text, int $number = 2): string
    {
        return str_repeat($text, $number);
    }
    public static function Italic(...$string): string
    {
        $string = implode(' ', $string);
        return "<i>$string</i>";
    }
    public static function Strike(...$string): string
    {
        $string = implode(' ', $string);
        return "<strike>$string</strike>";
    }
    public static function LineBln(...$string): string
    {
        return "\n" . implode(' ', $string) . "\n";
    }
    public static function NewLine(): string
    {
        return "\n";
    }
    public static function Spoiler(...$string): string
    {
        $string = implode(' ', $string);
        return "<tg-spoiler>$string</tg-spoiler>";
    }
    public static function Underline(...$string): string
    {
        $string = implode(' ', $string);
        return "<u>$string</u>";
    }
    public static function MultiLine(array $array): string
    {
        return implode("\n", $array);
    }
    public static function Blockquote(...$string): string
    {
        $string = implode(' ', $string);
        return "<blockquote>$string</blockquote>";
    }
    public static function RepeatLine(string $text, $number): string
    {
        $output = '';
        for ($i = 1; $i <= $number; $i++) {
            $output .= ($i === $number) ? $text : $text . "\n";
        }
        return $output;
    }
    public static function NewDoubleLine(): string
    {
        return "\n\n";
    }
}
