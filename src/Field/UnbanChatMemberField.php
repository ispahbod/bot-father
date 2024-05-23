<?php

namespace Ispahbod\BotFather\Field;

final class UnbanChatMemberField
{
    /**
     * Unique identifier for the target group or username of the target supergroup or channel (in the format @channelusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Unique identifier of the target user.
     * @var int
     */
    public const USER_ID = 'user_id';

    /**
     * Do nothing if the user is not banned.
     * @var bool|null
     */
    public const ONLY_IF_BANNED = 'only_if_banned';
}
