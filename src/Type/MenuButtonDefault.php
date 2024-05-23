<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class MenuButtonDefault
{
    use DataConstructor;

    /**
     * Retrieves the type of the menu button.
     * This type is always 'default'.
     *
     * @return string The type of the menu button.
     */
    public function getType(): string
    {
        return $this->data['type'] ?? 'default';
    }

}