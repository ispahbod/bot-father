<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class Chat
{
    use DataConstructor; 

    /**
     * Retrieves the unique identifier for this chat.
     * This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it.
     * However, it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @return int|null The unique identifier if available, otherwise null.
     */
    public function getId(): ?int
    {
        return $this->data['id'] ?? null;
    }

    /**
     * Retrieves the type of the chat.
     * Can be either "private", "group", "supergroup", or "channel".
     *
     * @return string|null The type of the chat if available, otherwise null.
     */
    public function getType(): ?string
    {
        return $this->data['type'] ?? null;
    }

    /**
     * Retrieves the title of the chat.
     * This is applicable for supergroups, channels, and group chats.
     *
     * @return string|null The title if available, otherwise null.
     */
    public function getTitle(): ?string
    {
        return $this->data['title'] ?? null;
    }

    /**
     * Retrieves the username of the chat.
     * This is applicable for private chats, supergroups, and channels if available.
     *
     * @return string|null The username if available, otherwise null.
     */
    public function getUsername(): ?string
    {
        return $this->data['username'] ?? null;
    }

    /**
     * Retrieves the first name of the other party in a private chat.
     *
     * @return string|null The first name if available, otherwise null.
     */
    public function getFirstName(): ?string
    {
        return $this->data['first_name'] ?? null;
    }

    /**
     * Retrieves the last name of the other party in a private chat.
     *
     * @return string|null The last name if available, otherwise null.
     */
    public function getLastName(): ?string
    {
        return $this->data['last_name'] ?? null;
    }

    /**
     * Checks if the supergroup chat is a forum (has topics enabled).
     *
     * @return bool|null True if the supergroup chat is a forum, otherwise null if the information is not available.
     */
    public function getIsForum(): ?bool
    {
        return $this->data['is_forum'] ?? null;
    }
}
