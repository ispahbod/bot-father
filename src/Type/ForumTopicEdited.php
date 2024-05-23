<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class ForumTopicEdited
{
    use DataConstructor;
    /**
     * Retrieves the new name of the topic if it was edited.
     *
     * @return string|null New name of the topic if edited, otherwise null.
     */
    public function getName(): ?string
    {
        return $this->data['name'] ?? null;
    }

    /**
     * Retrieves the new identifier of the custom emoji shown as the topic icon if it was edited, or an empty string if the icon was removed.
     *
     * @return string|null New identifier of the custom emoji if edited, an empty string if the icon was removed, otherwise null.
     */
    public function getIconCustomEmojiId(): ?string
    {
        return $this->data['icon_custom_emoji_id'] ?? null;
    }
}
