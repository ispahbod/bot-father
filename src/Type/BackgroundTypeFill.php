<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class BackgroundTypeFill
{
    use DataConstructor;

    /**
     * Retrieves the type of the background.
     * Type of the background, always "fill".
     *
     * @return string The type of the background.
     */
    public function getType(): string
    {
        return $this->data['type'];
    }

    /**
     * Retrieves the background fill.
     * The background fill.
     *
     * @return BackgroundFill|null The background fill object or null if not set.
     */
    public function getFill(): ?BackgroundFill
    {
        return isset($this->data['fill']) ? new BackgroundFill($this->data['fill']) : null;
    }

    /**
     * Retrieves the dimming of the background in dark themes.
     * Dimming of the background in dark themes, as a percentage; 0-100.
     *
     * @return int The percentage of dimming.
     */
    public function getDarkThemeDimming(): int
    {
        return $this->data['dark_theme_dimming'];
    }
}