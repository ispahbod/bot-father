<?php

namespace Ispahbod\BotFather\Field;

class SetChatTitleField
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * New chat title, 1-128 characters.
     * @var string
     */
    public const TITLE = 'title';
}