<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class BackgroundFillFreeformGradient
{
    use DataConstructor;
    /**
     * Retrieves the type of the background fill.
     * Type of the background fill, always "freeform_gradient".
     *
     * @return string The type of the background fill.
     */
    public function getType(): string
    {
        return 'freeform_gradient';
    }

    /**
     * Retrieves a list of the base colors used to generate the freeform gradient.
     * These colors are in the RGB24 format.
     *
     * @return array An array of integers representing the base colors in RGB24 format.
     */
    public function getColors(): array
    {
        return $this->data['colors'];
    }

}