<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class MessageOriginChat
{
    use DataConstructor;
    /**
     * Retrieves the type of the message origin.
     * This is always "chat".
     *
     * @return string The type of the message origin.
     */
    public function getType(): string
    {
        return $this->data['type'] ?? 'chat';
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
     * Retrieves the chat that originally sent the message.
     *
     * @return Chat|null The chat that sent the message, or null if not available.
     */
    public function getSenderChat(): ?Chat
    {
        return isset($this->data['sender_chat']) ? new Chat($this->data['sender_chat']) : null;
    }

    /**
     * Retrieves the original message author signature for messages sent by an anonymous chat administrator.
     *
     * @return string|null The author's signature, or null if not available.
     */
    public function getAuthorSignature(): ?string
    {
        return $this->data['author_signature'] ?? null;
    }
}
