<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class BackgroundFillGradient
{
    use DataConstructor;
    /**
     * Retrieves the type of the background fill.
     * Type of the background fill, always "gradient".
     *
     * @return string The type of the background fill.
     */
    public function getType(): string
    {
        return $this->data['type'];
    }

    /**
     * Retrieves the top color of the gradient in the RGB24 format.
     * Top color of the gradient.
     *
     * @return int The top color of the gradient in RGB24 format.
     */
    public function getTopColor(): int
    {
        return $this->data['top_color'];
    }

    /**
     * Retrieves the bottom color of the gradient in the RGB24 format.
     * Bottom color of the gradient.
     *
     * @return int The bottom color of the gradient in RGB24 format.
     */
    public function getBottomColor(): int
    {
        return $this->data['bottom_color'];
    }

    /**
     * Retrieves the clockwise rotation angle of the background fill in degrees.
     * Rotation angle of the background fill, ranging from 0 to 359 degrees.
     *
     * @return int The rotation angle of the background fill in degrees.
     */
    public function getRotationAngle(): int
    {
        return $this->data['rotation_angle'];
    }

}