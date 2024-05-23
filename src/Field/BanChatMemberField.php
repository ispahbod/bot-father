<?php

namespace Ispahbod\BotFather\Field;

final class BanChatMemberField
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
     * Date when the user will be unbanned; Unix time. If user is banned for more than 366 days or less than 30 seconds from the current time they are considered to be banned forever. Applied for supergroups and channels only.
     * @var int|null
     */
    public const UNTIL_DATE = 'until_date';

    /**
     * Pass True to delete all messages from the chat for the user that is being removed. If False, the user will be able to see messages in the group that were sent before the user was removed. Always True for supergroups and channels.
     * @var bool|null
     */
    public const REVOKE_MESSAGES = 'revoke_messages';
}
