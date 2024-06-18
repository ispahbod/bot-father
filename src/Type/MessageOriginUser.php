<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class MessageOriginUser
{
    use DataConstructor;

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
     * Retrieves the user that originally sent the message.
     *
     * @return User|null The user who sent the message, or null if not available.
     */
    public function getSenderUser(): ?User
    {
        return isset($this->data['sender_user']) ? new User($this->data['sender_user']) : null;
    }
}
