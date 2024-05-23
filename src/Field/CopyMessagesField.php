<?php

namespace Ispahbod\BotFather\Field;

final class CopyMessagesField
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     * @var string|int
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only.
     * @var int|null
     */
    public const MESSAGE_THREAD_ID = 'message_thread_id';

    /**
     * Unique identifier for the chat where the original messages were sent (or channel username in the format @channelusername).
     * @var string|int
     */
    public const FROM_CHAT_ID = 'from_chat_id';

    /**
     * A JSON-serialized list of 1-100 identifiers of messages in the chat from_chat_id to copy. The identifiers must be specified in a strictly increasing order.
     * @var array
     */
    public const MESSAGE_IDS = 'message_ids';

    /**
     * Sends the messages silently. Users will receive a notification with no sound.
     * @var bool|null
     */
    public const DISABLE_NOTIFICATION = 'disable_notification';

    /**
     * Protects the contents of the sent messages from forwarding and saving.
     * @var bool|null
     */
    public const PROTECT_CONTENT = 'protect_content';

    /**
     * Pass True to copy the messages without their captions.
     * @var bool|null
     */
    public const REMOVE_CAPTION = 'remove_caption';
}
