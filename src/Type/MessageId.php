<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class MessageId
{
    use DataConstructor;
    
    /**
     * Retrieves the unique identifier for this message.
     *
     * @return int|null The unique message identifier if available, otherwise null.
     */
    public function getMessageId(): ?int
    {
        return $this->data['message_id'] ?? null;
    }
}
