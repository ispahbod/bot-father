<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class KeyboardButtonPollType
{
    use DataConstructor;

    /**
     * Retrieves the type of poll allowed.
     * If 'quiz' is passed, the user will be allowed to create only polls in the quiz mode.
     * If 'regular' is passed, only regular polls will be allowed.
     * Otherwise, the user will be allowed to create a poll of any type.
     *
     * @return string|null The type of poll allowed, or null if not available.
     */
    public function getType(): ?string
    {
        return $this->data['type'] ?? null;
    }
}