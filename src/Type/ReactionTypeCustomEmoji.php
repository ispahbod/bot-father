<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class ReactionTypeCustomEmoji
{
    use DataConstructor;

    /**
     * Retrieves the type of the reaction.
     *
     * @return string The type of the reaction, always "custom_emoji".
     */
    public function getType(): string
    {
        return $this->data['type'];
    }

    /**
     * Retrieves the custom emoji identifier.
     *
     * @return string The custom emoji identifier.
     */
    public function getCustomEmojiId(): string
    {
        return $this->data['custom_emoji_id'];
    }
}