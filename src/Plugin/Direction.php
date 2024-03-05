<?php

namespace Ispahbod\BotFather\Plugin;

use Ispahbod\BotFather\Helper\LanguageDirection;

class Direction
{
    private string $active_direction = self::LTR;
    public const LTR = 'ltr';
    public const RTL = 'rtl';
    public const SHUFFLE = 'shuffle';
    public const SHUFFLE_ROW = 'shuffle_row';
    public const SHUFFLE_COLUMN = 'shuffle_column';
    public function DIR(): string
    {
        return $this->active_direction;
    }
    public static function Lang(string $languageCode): string
    {
        return LanguageDirection::Get($languageCode);
    }
    public function ActiveDirection(string $languageCode): self
    {
        $this->active_direction = self::Lang($languageCode);
        return $this;
    }
}
