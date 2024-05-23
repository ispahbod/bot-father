<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class BackgroundFillSolid
{
    use DataConstructor;
    /**
     * Retrieves the type of the background fill.
     * Type of the background fill, always "solid".
     *
     * @return string The type of the background fill.
     */
    public function getType(): string
    {
        return $this->data['type'];
    }

    /**
     * Retrieves the color of the background fill in the RGB24 format.
     * The color of the background fill.
     *
     * @return int The color of the background fill in RGB24 format.
     */
    public function getColor(): int
    {
        return $this->data['color'];
    }
}