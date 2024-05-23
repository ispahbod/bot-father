<?php

namespace Ispahbod\BotFather\Field;

class UnpinChatMessageField
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Identifier of a message to unpin. If not specified, the most recent pinned message (by sending date) will be unpinned.
     * @var int|null
     */
    public const MESSAGE_ID = 'message_id';
}