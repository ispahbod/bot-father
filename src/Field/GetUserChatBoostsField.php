<?php

namespace Ispahbod\BotFather\Field;

final class GetUserChatBoostsField
{
    /**
     * Unique identifier for the chat or username of the channel (in the format @channelusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Unique identifier of the target user.
     * @var int
     */
    public const USER_ID = 'user_id';
}
