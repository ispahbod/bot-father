<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class MessageOriginChannel
{
    use DataConstructor;

    /**
     * Retrieves the type of the message origin.
     * This is always "channel".
     *
     * @return string The type of the message origin.
     */
    public function getType(): string
    {
        return $this->data['type'] ?? 'channel';
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
     * Retrieves the channel chat to which the message was originally sent.
     *
     * @return Chat|null The chat object, or null if not available.
     */
    public function getChat(): ?Chat
    {
        return isset($this->data['chat']) ? new Chat($this->data['chat']) : null;
    }

    /**
     * Retrieves the unique message identifier inside the chat.
     *
     * @return int|null The message identifier, or null if not available.
     */
    public function getMessageId(): ?int
    {
        return $this->data['message_id'] ?? null;
    }

    /**
     * Retrieves the optional signature of the original post author.
     *
     * @return string|null The author's signature, or null if not available.
     */
    public function getAuthorSignature(): ?string
    {
        return $this->data['author_signature'] ?? null;
    } 
}
