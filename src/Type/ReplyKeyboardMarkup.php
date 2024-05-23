<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class ReplyKeyboardMarkup
{
    use DataConstructor;
    
    /**
     * Retrieves the array of button rows, each represented by an array of KeyboardButton objects.
     *
     * @return array The array of button rows.
     */
    public function getKeyboard(): array
    {
        return $this->data['keyboard'] ?? [];
    }

    /**
     * Checks if the keyboard is persistent.
     *
     * @return bool True if the keyboard is persistent, false otherwise.
     */
    public function isPersistent(): bool
    {
        return $this->data['is_persistent'] ?? false;
    }

    /**
     * Checks if the keyboard should be resized.
     *
     * @return bool True if the keyboard should be resized, false otherwise.
     */
    public function shouldResizeKeyboard(): bool
    {
        return $this->data['resize_keyboard'] ?? false;
    }

    /**
     * Checks if the keyboard is a one-time keyboard.
     *
     * @return bool True if the keyboard is one-time, false otherwise.
     */
    public function isOneTimeKeyboard(): bool
    {
        return $this->data['one_time_keyboard'] ?? false;
    }

    /**
     * Retrieves the placeholder text for the input field when the keyboard is active.
     *
     * @return string|null The placeholder text, or null if not available.
     */
    public function getInputFieldPlaceholder(): ?string
    {
        return $this->data['input_field_placeholder'] ?? null;
    }

    /**
     * Checks if the keyboard should be shown to specific users only.
     *
     * @return bool True if the keyboard is selective, false otherwise.
     */
    public function isSelective(): bool
    {
        return $this->data['selective'] ?? false;
    }
}