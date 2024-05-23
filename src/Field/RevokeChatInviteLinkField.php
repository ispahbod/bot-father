<?php

namespace Ispahbod\BotFather\Field;

class RevokeChatInviteLinkField
{
    /**
     * Unique identifier of the target chat or username of the target channel (in the format @channelusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * The invite link to revoke.
     * @var string
     */
    public const INVITE_LINK = 'invite_link';
}