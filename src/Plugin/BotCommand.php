<?php

namespace Ispahbod\BotFather\Plugin;

use Ispahbod\BotFather\Field\BotCommandField;

final class BotCommand
{
    public static function commands($array): array
    {
        return array_filter($array);
    }

    public static function command(string $command, string $description = '', $exp = true): ?array
    {
        return $exp ? [
            BotCommandField::COMMAND => $command,
            BotCommandField::DESCRIPTION => $description,
        ] : null;
    }
}
