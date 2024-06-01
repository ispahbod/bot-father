<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class BusinessConnection
{
    use DataConstructor;

    /**
     * Retrieves the unique identifier of the business connection.
     *
     * @return string The unique identifier.
     */
    public function getId(): string
    {
        return $this->data['id'];
    }

    /**
     * Retrieves the business account user that created the business connection.
     *
     * @return User The user object.
     */
    public function getUser(): User
    {
        return new User($this->data['user']);
    }

    /**
     * Retrieves the identifier of a private chat with the user who created the business connection.
     * This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it.
     * However, it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @return int|null The unique chat identifier if available, otherwise null.
     */
    public function getUserChatId(): ?int
    {
        return $this->data['user_chat_id'] ?? null;
    }

    /**
     * Retrieves the date the connection was established in Unix time.
     *
     * @return int The date the connection was established.
     */
    public function getDate(): int
    {
        return $this->data['date'];
    }

    /**
     * Checks if the bot can act on behalf of the business account in chats that were active in the last 24 hours.
     *
     * @return bool True if the bot can reply, otherwise false.
     */
    public function canReply(): bool
    {
        return $this->data['can_reply'] ?? false;
    }

    /**
     * Checks if the connection is active.
     *
     * @return bool True if the connection is enabled, otherwise false.
     */
    public function isEnabled(): bool
    {
        return $this->data['is_enabled'] ?? false;
    }
}