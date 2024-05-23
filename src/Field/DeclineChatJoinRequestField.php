<?php

namespace Ispahbod\BotFather\Field;

class DeclineChatJoinRequestField
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Unique identifier of the target user.
     * @var int
     */
    public const USER_ID = 'user_id';
}