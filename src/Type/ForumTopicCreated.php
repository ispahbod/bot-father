<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class ForumTopicCreated
{
    use DataConstructor;

    /**
     * Retrieves the name of the topic.
     *
     * @return string Name of the topic.
     */
    public function getName(): string
    {
        return $this->data['name'];
    }

    /**
     * Retrieves the color of the topic icon in RGB format.
     *
     * @return int Color of the topic icon in RGB format.
     */
    public function getIconColor(): int
    {
        return $this->data['icon_color'];
    }

    /**
     * Retrieves the unique identifier of the custom emoji shown as the topic icon, if available.
     *
     * @return string|null Unique identifier of the custom emoji shown as the topic icon, or null if not set.
     */
    public function getIconCustomEmojiId(): ?string
    {
        return $this->data['icon_custom_emoji_id'] ?? null;
    }
}
