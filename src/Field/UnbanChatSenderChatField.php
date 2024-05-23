<?php

namespace Ispahbod\BotFather\Field;

class UnbanChatSenderChatField
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Unique identifier of the target sender chat.
     * @var int
     */
    public const SENDER_CHAT_ID = 'sender_chat_id';
}