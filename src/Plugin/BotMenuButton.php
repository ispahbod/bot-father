<?php

namespace Ispahbod\BotFather\Plugin;

use Ispahbod\BotFather\Type\WebAppInfo;

class BotMenuButton
{
    public static function commands(): array
    {
        return [
            'type' => 'commands',
        ];
    }
    public static function webApp(string $text, WebAppInfo $web_app): array
    {
        return [
            'type' => 'web_app',
            'text' => $text,
            'web_app' => $web_app,
        ];
    }

    public static function default(): string
    {
        return json_encode([
            'type' => 'default',
        ]);
    }
}
