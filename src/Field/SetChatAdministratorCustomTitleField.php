<?php

namespace Ispahbod\BotFather\Field;

class SetChatAdministratorCustomTitleField
{
    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Unique identifier of the target user.
     * @var int
     */
    public const USER_ID = 'user_id';

    /**
     * New custom title for the administrator; 0-16 characters, emoji are not allowed.
     * @var string
     */
    public const CUSTOM_TITLE = 'custom_title';
}