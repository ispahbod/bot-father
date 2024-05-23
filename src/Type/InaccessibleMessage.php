<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class InaccessibleMessage
{
    use DataConstructor;
    /**
     * Retrieves the chat the message belonged to.
     *
     * @return Chat|null The chat object if available, otherwise null.
     */
    public function getChat(): ?Chat
    {
        return isset($this->data['chat']) ? new Chat($this->data['chat']) : null;
    }

    /**
     * Retrieves the unique message identifier inside the chat.
     *
     * @return int|null The unique message identifier if available, otherwise null.
     */
    public function getMessageId(): ?int
    {
        return $this->data['message_id'] ?? null;
    }

    /**
     * Always returns 0. This field can be used to differentiate regular and inaccessible messages.
     *
     * @return int Always 0.
     */
    public function getDate(): int
    {
        return 0;
    }
}
