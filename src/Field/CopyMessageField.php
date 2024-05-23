<?php

namespace Ispahbod\BotFather\Field;

use Ispahbod\BotFather\Type\MessageEntity;
use Ispahbod\BotFather\Type\ReplyParameters;
use Ispahbod\BotFather\Type\InlineKeyboardMarkup;
use Ispahbod\BotFather\Type\ReplyKeyboardMarkup;
use Ispahbod\BotFather\Type\ReplyKeyboardRemove;
use Ispahbod\BotFather\Type\ForceReply;
 
final class CopyMessageField
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
     * Message identifier in the chat specified in from_chat_id.
     * @var int
     */
    public const MESSAGE_ID = 'message_id';

    /**
     * New caption for media, 0-1024 characters after entities parsing. If not specified, the original caption is kept.
     * @var string|null
     */
    public const CAPTION = 'caption';

    /**
     * Mode for parsing entities in the new caption. See formatting options for more details.
     * @var string|null
     */
    public const PARSE_MODE = 'parse_mode';

    /**
     * A JSON-serialized list of special entities that appear in the new caption, which can be specified instead of parse_mode.
     * @var array<MessageEntity>|null
     */
    public const CAPTION_ENTITIES = 'caption_entities';

    /**
     * Sends the message silently. Users will receive a notification with no sound.
     * @var bool|null
     */
    public const DISABLE_NOTIFICATION = 'disable_notification';

    /**
     * Protects the contents of the sent message from forwarding and saving.
     * @var bool|null
     */
    public const PROTECT_CONTENT = 'protect_content';

    /**
     * Description of the message to reply to.
     * @var ReplyParameters|null
     */
    public const REPLY_PARAMETERS = 'reply_parameters';

    /**
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove a reply keyboard or to force a reply from the user.
     * @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null
     */
    public const REPLY_MARKUP = 'reply_markup';
}
