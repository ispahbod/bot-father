<?php

namespace Ispahbod\BotFather\Field;

final class EditGeneralForumTopicField
{
    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * New topic name, must be 1-128 characters.
     * @var string
     */
    public const NAME = 'name';
}
