<?php

namespace Ispahbod\BotFather\Plugin;

class Reaction
{
    public static function Set(array $array): string
    {
        return json_encode($array);
    }
    public static function Emoji(string $emoji): array
    {
        return [
            'type' => 'emoji',
            'emoji' => $emoji,
        ];
    }
    public static function CustomEmoji(string $emoji_id): array
    {
        return [
            'type' => 'custom_emoji',
            'emoji' => $emoji_id,
        ];
    }
}