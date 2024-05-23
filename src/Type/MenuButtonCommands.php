<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class MenuButtonCommands
{
    use DataConstructor;

    /**
     * Retrieves the type of the menu button.
     * This type is always 'commands'.
     *
     * @return string The type of the menu button.
     */
    public function getType(): string
    {
        return $this->data['type'] ?? 'commands';
    }
}