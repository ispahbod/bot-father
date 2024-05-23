<?php

namespace Ispahbod\BotFather\Field;

class SetChatDescriptionField
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * New chat description, 0-255 characters.
     * @var string|null
     */
    public const DESCRIPTION = 'description';
}