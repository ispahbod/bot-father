<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class MessageAutoDeleteTimerChanged
{
    use DataConstructor;
    /**
     * Retrieves the new auto-delete time for messages in the chat.
     *
     * @return int The new auto-delete time for messages in the chat, in seconds.
     */
    public function getMessageAutoDeleteTime(): int
    {
        return $this->data['message_auto_delete_time'];
    }
}
