<?php

namespace Ispahbod\BotFather\Plugin;

class TextMaker
{
    public static function PersianNumbers($string): string
    {
        $persianNumbers = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');
        $englishNumbers = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
        return str_replace($persianNumbers, $englishNumbers, $string);
    }

    public static function EnglishNumbers($string): string
    {
        $englishNumbers = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
        $persianNumbers = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');
        return str_replace($englishNumbers, $persianNumbers, $string);
    }

    public static function Truncate($string, $maxChars, $ellipsis = '...'): string
    {
        if ($maxChars < 1) {
            return '';
        }
        $textLength = mb_strlen($string, 'utf-8');
        if ($textLength <= $maxChars) {
            return $string;
        }
        $truncatedText = mb_substr($string, 0, $maxChars, 'utf-8');
        $truncatedText = rtrim($truncatedText);
        $truncatedText .= $ellipsis;
        return $truncatedText;
    }

    public static function Random($array): string
    {
        return $array[array_rand($array)];
    }

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

    public static function Each(array $array, $callble, ?int $count = null): string
    {
        $array = array_map($callble, $array);
        if ($count !== null) {
            $array = array_slice($array, 0, $count);
        }
        return implode(' ', $array);
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

    public static function Link(string $string, string $href): string
    {
        $string = is_array($string) ? implode(' ', $string) : $string;
        $href = urldecode($href);
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

    public static function SortByLength($array): string
    {
        usort($array, function ($a, $b) {
            $textA = strip_tags($a);
            $textB = strip_tags($b);
            return strlen($textA) <=> strlen($textB);
        });
        return self::Make($array);
    }

    public static function Shuffle($array): string
    {
        shuffle($array);
        return self::Make($array);
    }

    public static function CapitalizeFirstLetter($text): string
    {
        return strip_tags(ucfirst($text));
    }

    public static function If(bool $exp, string $if, $else = null)
    {
        return $exp ? $if : $else;
    }
}