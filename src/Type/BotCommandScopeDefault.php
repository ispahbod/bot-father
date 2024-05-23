<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class BotCommandScopeDefault
{
    use DataConstructor;

    /**
     * Retrieves the type of the scope.
     * This type is always 'default'.
     *
     * @return string The type of the scope.
     */
    public function getType(): string
    {
        return $this->data['type'] ?? 'default';
    }
}