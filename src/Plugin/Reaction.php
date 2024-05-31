<?php

namespace Ispahbod\BotFather\Plugin;

class Reaction
{
    public static function set(array $array): string
    {
        return json_encode($array);
    }
    public static function emoji(string $emoji): array
    {
        return [
            'type' => 'emoji',
            'emoji' => $emoji,
        ];
    }
    public static function customEmoji(string $emoji_id): array
    {
        return [
            'type' => 'custom_emoji',
            'emoji' => $emoji_id,
        ];
    }
}