<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\ContentType;
use Ispahbod\BotFather\Trait\DataConstructor;

final class BusinessMessagesDeleted
{
    use DataConstructor;
    use ContentType;

    /**
     * Retrieves the unique identifier of the business connection.
     *
     * @return string The unique identifier of the business connection.
     */
    public function getBusinessConnectionId(): string
    {
        return $this->data['business_connection_id'];
    }

    /**
     * Retrieves information about a chat in the business account.
     * Note: The bot may not have access to the chat or the corresponding user.
     *
     * @return Chat The chat object.
     */
    public function getChat(): Chat
    {
        return new Chat($this->data['chat']);
    }

    /**
     * Retrieves the list of identifiers of deleted messages in the chat of the business account.
     *
     * @return array An array of integers representing the message identifiers.
     */
    public function getMessageIds(): array
    {
        return $this->data['message_ids'];
    }
}