<?php

namespace Ispahbod\BotFather\Field;

use Ispahbod\BotFather\Type\ReplyParameters;
use Ispahbod\BotFather\Type\InlineKeyboardMarkup;
use Ispahbod\BotFather\Type\ReplyKeyboardMarkup;
use Ispahbod\BotFather\Type\ReplyKeyboardRemove;
use Ispahbod\BotFather\Type\ForceReply;

class SendDiceField
{
    /**
     * Optional. Unique identifier of the business connection on behalf of which the message will be sent.
     * @var string|null
     */
    public const BUSINESS_CONNECTION_ID = 'business_connection_id';

    /**
     * Required. Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only.
     * @var int|null
     */
    public const MESSAGE_THREAD_ID = 'message_thread_id';

    /**
     * Optional. Emoji on which the dice throw animation is based. Defaults to “🎲”.
     * @var string|null
     */
    public const EMOJI = 'emoji';

    /**
     * Optional. Sends the message silently. Users will receive a notification with no sound.
     * @var bool|null
     */
    public const DISABLE_NOTIFICATION = 'disable_notification';

    /**
     * Optional. Protects the contents of the sent message from forwarding.
     * @var bool|null
     */
    public const PROTECT_CONTENT = 'protect_content';

    /**
     * Optional. Description of the message to reply to.
     * @var ReplyParameters|null
     */
    public const REPLY_PARAMETERS = 'reply_parameters';

    /**
     * Optional. Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove a reply keyboard or to force a reply from the user.
     * @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null
     */
    public const REPLY_MARKUP = 'reply_markup';

    /**
     * Unique identifier of the message effect to be added to the message; for private chats only
     */
    public const MESSAGE_EFFECT_ID = 'message_effect_id';
}