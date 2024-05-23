<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class ForumTopic
{
    use DataConstructor;

    /**
     * Retrieves the unique identifier of the forum topic.
     *
     * @return int The unique identifier of the forum topic.
     */
    public function getMessageThreadId(): int
    {
        return $this->data['message_thread_id'];
    }

    /**
     * Retrieves the name of the topic.
     *
     * @return string The name of the topic.
     */
    public function getName(): string
    {
        return $this->data['name'];
    }

    /**
     * Retrieves the color of the topic icon in RGB format.
     *
     * @return int The RGB color of the topic icon.
     */
    public function getIconColor(): int
    {
        return $this->data['icon_color'];
    }

    /**
     * Retrieves the unique identifier of the custom emoji shown as the topic icon, if available.
     *
     * @return string|null The unique identifier of the custom emoji, or null if not available.
     */
    public function getIconCustomEmojiId(): ?string
    {
        return $this->data['icon_custom_emoji_id'] ?? null;
    }
}
