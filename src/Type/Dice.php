<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class Dice
{
    use DataConstructor;

    /**
     * Retrieves the emoji on which the dice throw animation is based.
     *
     * @return string The emoji used for the dice animation.
     */
    public function getEmoji(): string
    {
        return $this->data['emoji'];
    }

    /**
     * Retrieves the value of the dice throw.
     * The value ranges are:
     * - 1-6 for “🎲”, “🎯”, and “🎳” base emoji
     * - 1-5 for “🏀” and “⚽” base emoji
     * - 1-64 for “🎰” base emoji
     *
     * @return int The value of the dice throw.
     */
    public function getValue(): int
    {
        return $this->data['value'];
    }
}
