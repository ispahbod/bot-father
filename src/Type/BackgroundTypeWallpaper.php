<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class BackgroundTypeWallpaper
{
    use DataConstructor;

    /**
     * Retrieves the type of the background.
     * Type of the background, always "wallpaper".
     *
     * @return string The type of the background.
     */
    public function getType(): string
    {
        return $this->data['type']; // Always returns "wallpaper"
    }

    /**
     * Retrieves the document with the wallpaper.
     * Document with the wallpaper.
     *
     * @return Document The document object.
     */
    public function getDocument(): Document
    {
        return new Document($this->data['document']);
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

    /**
     * Checks if the wallpaper is blurred.
     * True, if the wallpaper is downscaled to fit in a 450x450 square and then box-blurred with radius 12.
     *
     * @return bool True if the wallpaper is blurred, otherwise false.
     */
    public function isBlurred(): bool
    {
        return $this->data['is_blurred'] ?? false;
    }

    /**
     * Checks if the background moves slightly when the device is tilted.
     * True, if the background moves slightly when the device is tilted.
     *
     * @return bool True if the background is moving, otherwise false.
     */
    public function isMoving(): bool
    {
        return $this->data['is_moving'] ?? false;
    }

}