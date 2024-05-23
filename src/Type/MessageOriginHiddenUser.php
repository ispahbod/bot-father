<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class MessageOriginHiddenUser
{
    use DataConstructor;

    /**
     * Retrieves the type of the message origin.
     * This is always "hidden_user".
     *
     * @return string The type of the message origin.
     */
    public function getType(): string
    {
        return $this->data['type'] ?? 'hidden_user';
    }

    /**
     * Retrieves the date the message was originally sent, in Unix time format.
     *
     * @return int|null The date the message was sent, or null if not available.
     */
    public function getDate(): ?int
    {
        return $this->data['date'] ?? null;
    }

    /**
     * Retrieves the name of the user that originally sent the message.
     *
     * @return string|null The sender's username, or null if not available.
     */
    public function getSenderUserName(): ?string
    {
        return $this->data['sender_user_name'] ?? null;
    }
}
