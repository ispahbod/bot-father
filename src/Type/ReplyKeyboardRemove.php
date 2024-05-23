<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class ReplyKeyboardRemove
{
    use DataConstructor;

    /**
     * Requests clients to remove the custom keyboard.
     * 
     * @return bool Always returns true to indicate the keyboard should be removed.
     */
    public function isRemoveKeyboard(): bool
    {
        return true;
    }

    /**
     * Determines if the keyboard removal should be selective.
     * If true, the keyboard will only be removed for specific users.
     * 
     * @return bool|null True if selective removal is enabled, null if not specified.
     */
    public function isSelective(): ?bool
    {
        return $this->data['selective'] ?? null;
    }
}