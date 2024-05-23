<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class MessageEntity
{
    use DataConstructor;
    /**
     * Retrieves the type of the entity. Types include "mention", "hashtag", "cashtag", "bot_command", "url", "email",
     * "phone_number", "bold", "italic", "underline", "strikethrough", "spoiler", "blockquote", "code", "pre",
     * "text_link", "text_mention", "custom_emoji".
     *
     * @return string The type of the entity.
     */
    public function getType(): string
    {
        return $this->data['type'];
    }

    /**
     * Retrieves the offset in UTF-16 code units to the start of the entity.
     *
     * @return int The offset to the start of the entity.
     */
    public function getOffset(): int
    {
        return $this->data['offset'];
    }

    /**
     * Retrieves the length of the entity in UTF-16 code units.
     *
     * @return int The length of the entity.
     */
    public function getLength(): int
    {
        return $this->data['length'];
    }

    /**
     * Retrieves the URL for the entity. Only applicable for "text_link" entities.
     *
     * @return string|null The URL if available, otherwise null.
     */
    public function getUrl(): ?string
    {
        return $this->data['url'] ?? null;
    }

    /**
     * Retrieves the User object for the entity. Only applicable for "text_mention" entities.
     *
     * @return User|null The mentioned user if available, otherwise null.
     */
    public function getUser(): ?User
    {
        return isset($this->data['user']) ? new User($this->data['user']) : null;
    }

    /**
     * Retrieves the programming language for the entity. Only applicable for "pre" entities.
     *
     * @return string|null The programming language if available, otherwise null.
     */
    public function getLanguage(): ?string
    {
        return $this->data['language'] ?? null;
    }

    /**
     * Retrieves the unique identifier of the custom emoji. Only applicable for "custom_emoji" entities.
     *
     * @return string|null The unique identifier of the custom emoji if available, otherwise null.
     */
    public function getCustomEmojiId(): ?string
    {
        return $this->data['custom_emoji_id'] ?? null;
    }
}
