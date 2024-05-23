<?php

namespace Ispahbod\BotFather\Field;

final class DeleteMessageField
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     * @var string|int
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Identifier of the message to delete.
     * @var int
     */
    public const MESSAGE_ID = 'message_id';
}
