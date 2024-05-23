<?php

namespace Ispahbod\BotFather\Field;

class GetChatMenuButtonField
{
    /**
     * Unique identifier for the target private chat.
     * Optional. If not specified, default bot's menu button will be returned.
     * @var int|null
     */
    public const CHAT_ID = 'chat_id';
}