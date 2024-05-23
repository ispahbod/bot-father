<?php

namespace Ispahbod\BotFather\Field;

final class SetChatStickerSetField
{
    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Name of the sticker set to be set as the group sticker set.
     * @var string
     */
    public const STICKER_SET_NAME = 'sticker_set_name';
}
