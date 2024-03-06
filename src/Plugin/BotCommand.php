<?php

namespace Ispahbod\BotFather\Plugin;

use Ispahbod\BotFather\Field\BotCommandField;

final class BotCommand
{
    public static function Commands($array): string
    {
        return json_encode($array);
    }

    public static function Command(string $command, string $description = ''): array
    {
        return [
            BotCommandField::COMMAND => $command,
            BotCommandField::DESCRIPTION => $description,
        ];
    }
}