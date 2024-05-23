<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class ReactionTypeEmoji
{
    use DataConstructor;

    /**
     * Retrieves the type of the reaction.
     *
     * @return string The type of the reaction, always "emoji".
     */
    public function getType(): string
    {
        return $this->data['type'];
    }

    /**
     * Retrieves the reaction emoji.
     * The emoji can be one of several predefined options.
     *
     * @return string The reaction emoji.
     */
    public function getEmoji(): string
    {
        return $this->data['emoji'];
    }
}