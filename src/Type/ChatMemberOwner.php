<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class ChatMemberOwner
{
    use DataConstructor;

    /**
     * Retrieves the member's status in the chat.
     *
     * @return string The member's status, always "creator".
     */
    public function getStatus(): string
    {
        return $this->data['status'];
    }

    /**
     * Retrieves information about the user.
     *
     * @return User Information about the user.
     */
    public function getUser(): User
    {
        return new User($this->data['user']);
    }

    /**
     * Checks if the user's presence in the chat is hidden.
     *
     * @return bool True if the user's presence is hidden, otherwise false.
     */
    public function isAnonymous(): bool
    {
        return $this->data['is_anonymous'] ?? false;
    }

    /**
     * Retrieves the custom title for this user, if available.
     *
     * @return string|null The custom title for the user, or null if not available.
     */
    public function getCustomTitle(): ?string
    {
        return $this->data['custom_title'] ?? null;
    }
}