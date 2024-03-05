<?php

namespace Ispahbod\BotFather\Plugin;

use Ispahbod\BotFather\Type\WebAppInfo;

class BotMenuButton
{
    public static function Commands(): string
    {
        return json_encode([
            'type' => 'commands',
        ]);
    }
    public static function WebApp(string $text, WebAppInfo $web_app): string
    {
        return json_encode([
            'type' => 'web_app',
            'text' => $text,
            'web_app' => $web_app,
        ]);
    }

    public static function Default(): string
    {
        return json_encode([
            'type' => 'default',
        ]);
    }
}
