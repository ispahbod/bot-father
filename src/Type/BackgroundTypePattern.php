<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class BackgroundTypePattern
{
    use DataConstructor;


    /**
     * Retrieves the type of the background.
     * Type of the background, always "pattern".
     *
     * @return string The type of the background.
     */
    public function getType(): string
    {
        return $this->data['type']; // Always returns "pattern"
    }

    /**
     * Retrieves the document with the pattern.
     * Document with the pattern.
     *
     * @return Document The document object.
     */
    public function getDocument(): Document
    {
        return new Document($this->data['document']);
    }

    /**
     * Retrieves the background fill that is combined with the pattern.
     * The background fill.
     *
     * @return BackgroundFill|null The background fill object or null if not set.
     */
    public function getFill(): ?BackgroundFill
    {
        return isset($this->data['fill']) ? new BackgroundFill($this->data['fill']) : null;
    }

    /**
     * Retrieves the intensity of the pattern when it is shown above the filled background.
     * Intensity of the pattern; 0-100.
     *
     * @return int The intensity of the pattern.
     */
    public function getIntensity(): int
    {
        return $this->data['intensity'];
    }

    /**
     * Checks if the background fill must be applied only to the pattern itself.
     * True, if the background fill must be applied only to the pattern itself. All other pixels are black in this case. For dark themes only.
     *
     * @return bool True if the fill is inverted, otherwise false.
     */
    public function isInverted(): bool
    {
        return $this->data['is_inverted'] ?? false;
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