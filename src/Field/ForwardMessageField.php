<?php

namespace Ispahbod\BotFather\Field;

final class ForwardMessageField
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
     * Unique identifier for the chat where the original message was sent (or channel username in the format @channelusername).
     * @var string|int
     */
    public const FROM_CHAT_ID = 'from_chat_id';

    /**
     * Sends the message silently. Users will receive a notification with no sound.
     * @var bool|null
     */
    public const DISABLE_NOTIFICATION = 'disable_notification';

    /**
     * Protects the contents of the forwarded message from forwarding and saving.
     * @var bool|null
     */
    public const PROTECT_CONTENT = 'protect_content';

    /**
     * Message identifier in the chat specified in from_chat_id.
     * @var int
     */
    public const MESSAGE_ID = 'message_id';

}
