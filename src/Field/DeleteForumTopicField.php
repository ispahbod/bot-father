<?php

namespace Ispahbod\BotFather\Field;

final class DeleteForumTopicField
{
    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Unique identifier for the target message thread of the forum topic.
     * @var int
     */
    public const MESSAGE_THREAD_ID = 'message_thread_id';
}
