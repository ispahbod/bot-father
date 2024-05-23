<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class ForceReply
{
    use DataConstructor;

    /**
     * Indicates if the reply interface should be shown to the user.
     *
     * @return bool True if the reply interface should be shown, otherwise false.
     */
    public function isForceReply(): bool
    {
        return $this->data['force_reply'] ?? false;
    }

    /**
     * Retrieves the placeholder text to be shown in the input field when the reply is active.
     *
     * @return string|null The placeholder text, or null if not available.
     */
    public function getInputFieldPlaceholder(): ?string
    {
        return $this->data['input_field_placeholder'] ?? null;
    }

    /**
     * Checks if the force reply is selective.
     *
     * @return bool True if the force reply is selective, otherwise false.
     */
    public function isSelective(): bool
    {
        return $this->data['selective'] ?? false;
    }
}