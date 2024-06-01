<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\ContentType;
use Ispahbod\BotFather\Trait\DataConstructor;

final class MessageReactionCountUpdated
{
    use DataConstructor;
    use ContentType;

    /**
     * Retrieves the chat containing the message.
     *
     * @return Chat The chat object.
     */
    public function getChat(): Chat
    {
        return new Chat($this->data['chat']);
    }

    /**
     * Retrieves the unique message identifier inside the chat.
     *
     * @return int The unique message identifier.
     */
    public function getMessageId(): int
    {
        return $this->data['message_id'];
    }

    /**
     * Retrieves the date of the change in Unix time.
     *
     * @return int The Unix timestamp of the reaction change.
     */
    public function getDate(): int
    {
        return $this->data['date'];
    }

    /**
     * Retrieves the list of reactions that are present on the message.
     *
     * @return array An array of ReactionCount objects.
     */
    public function getReactions(): array
    {
        return array_map(function ($reaction) {
            return new ReactionCount($reaction);
        }, $this->data['reactions']);
    }
}