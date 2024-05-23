<?php

namespace Ispahbod\BotFather\Field;

class CreateChatInviteLinkField
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Invite link name; 0-32 characters.
     * @var string|null
     */
    public const NAME = 'name';

    /**
     * Point in time (Unix timestamp) when the link will expire.
     * @var int|null
     */
    public const EXPIRE_DATE = 'expire_date';

    /**
     * The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999.
     * @var int|null
     */
    public const MEMBER_LIMIT = 'member_limit';

    /**
     * True, if users joining the chat via the link need to be approved by chat administrators. If True, member_limit can't be specified.
     * @var bool|null
     */
    public const CREATES_JOIN_REQUEST = 'creates_join_request';
}