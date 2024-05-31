<?php

namespace Ispahbod\BotFather\Field;

final class SendMediaGroupField
{
    /**
     * Unique identifier of the business connection on behalf of which the message will be sent.
     * @var string|null
     */
    public const BUSINESS_CONNECTION_ID = 'business_connection_id';

    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only.
     * @var int|null
     */
    public const MESSAGE_THREAD_ID = 'message_thread_id';

    /**
     * A JSON-serialized array describing messages to be sent, must include 2-10 items.
     * @var array
     */
    public const MEDIA = 'media';

    /**
     * Sends messages silently. Users will receive a notification with no sound.
     * @var bool|null
     */
    public const DISABLE_NOTIFICATION = 'disable_notification';

    /**
     * Protects the contents of the sent messages from forwarding and saving.
     * @var bool|null
     */
    public const PROTECT_CONTENT = 'protect_content';

    /**
     * Description of the message to reply to.
     * @var ReplyParameters|null
     */
    public const REPLY_PARAMETERS = 'reply_parameters';

    /**
     * Unique identifier of the message effect to be added to the message; for private chats only
     */
    public const MESSAGE_EFFECT_ID = 'message_effect_id';
}
