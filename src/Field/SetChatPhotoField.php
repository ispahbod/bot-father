<?php

namespace Ispahbod\BotFather\Field;

class SetChatPhotoField
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * New chat photo, uploaded using multipart/form-data.
     * @var mixed
     */
    public const PHOTO = 'photo';
}