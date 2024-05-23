<?php

namespace Ispahbod\BotFather\Field;

final class EditForumTopicField
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

    /**
     * New topic name, 0-128 characters. If not specified or empty, the current name of the topic will be kept.
     * @var string|null
     */
    public const NAME = 'name';

    /**
     * New unique identifier of the custom emoji shown as the topic icon. Use getForumTopicIconStickers to get all allowed custom emoji identifiers.
     * Pass an empty string to remove the icon. If not specified, the current icon will be kept.
     * @var string|null
     */
    public const ICON_CUSTOM_EMOJI_ID = 'icon_custom_emoji_id';
}
