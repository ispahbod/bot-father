<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class ChatBoostRemoved
{
    use DataConstructor;

    /**
     * Retrieves the chat which was boosted.
     *
     * @return Chat The chat object.
     */
    public function getChat(): Chat
    {
        return new Chat($this->data['chat']);
    }

    /**
     * Retrieves the unique identifier of the boost.
     *
     * @return string The unique boost identifier.
     */
    public function getBoostId(): string
    {
        return $this->data['boost_id'];
    }

    /**
     * Retrieves the point in time (Unix timestamp) when the boost was removed.
     *
     * @return int The remove date as a Unix timestamp.
     */
    public function getRemoveDate(): int
    {
        return $this->data['remove_date'];
    }

    /**
     * Retrieves the source of the removed boost.
     *
     * @return ChatBoostSource The source of the boost.
     */
    public function getSource(): ChatBoostSource
    {
        return new ChatBoostSource($this->data['source']);
    }
}
