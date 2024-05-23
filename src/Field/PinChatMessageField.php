<?php

namespace Ispahbod\BotFather\Field;

class PinChatMessageField
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Identifier of a message to pin.
     * @var int
     */
    public const MESSAGE_ID = 'message_id';

    /**
     * Pass True if it is not necessary to send a notification to all chat members about the new pinned message.
     * Notifications are always disabled in channels and private chats.
     * @var bool|null
     */
    public const DISABLE_NOTIFICATION = 'disable_notification';
}