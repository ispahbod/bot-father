<?php

namespace Ispahbod\BotFather\Field;

use Ispahbod\BotFather\Type\InputFile;
use Ispahbod\BotFather\Type\MessageEntity;
use Ispahbod\BotFather\Type\ReplyParameters;
use Ispahbod\BotFather\Type\InlineKeyboardMarkup;
use Ispahbod\BotFather\Type\ReplyKeyboardMarkup;
use Ispahbod\BotFather\Type\ReplyKeyboardRemove;
use Ispahbod\BotFather\Type\ForceReply;

final class SendAudioField
{
    /**
     * Optional. Unique identifier of the business connection on behalf of which the message will be sent.
     * @var string|null
     */
    public const BUSINESS_CONNECTION_ID = 'business_connection_id';

    /**
     * Required. Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     * @var string|int
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only.
     * @var int|null
     */
    public const MESSAGE_THREAD_ID = 'message_thread_id';

    /**
     * Required. Audio file to send. Pass a file_id as String to send an audio file that exists on the Telegram servers (recommended), 
     * pass an HTTP URL as a String for Telegram to get an audio file from the Internet, or upload a new one using multipart/form-data.
     * @var InputFile|string
     */
    public const AUDIO = 'audio';

    /**
     * Optional. Audio caption, 0-1024 characters after entities parsing.
     * @var string|null
     */
    public const CAPTION = 'caption';

    /**
     * Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
     * @var string|null
     */
    public const PARSE_MODE = 'parse_mode';

    /**
     * Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode.
     * @var array<MessageEntity>|null
     */
    public const CAPTION_ENTITIES = 'caption_entities';

    /**
     * Optional. Duration of the audio in seconds.
     * @var int|null
     */
    public const DURATION = 'duration';

    /**
     * Optional. Performer of the audio.
     * @var string|null
     */
    public const PERFORMER = 'performer';

    /**
     * Optional. Track name.
     * @var string|null
     */
    public const TITLE = 'title';

    /**
     * Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side.
     * @var InputFile|string|null
     */
    public const THUMBNAIL = 'thumbnail';

    /**
     * Optional. Sends the message silently. Users will receive a notification with no sound.
     * @var bool|null
     */
    public const DISABLE_NOTIFICATION = 'disable_notification';

    /**
     * Optional. Protects the contents of the sent message from forwarding and saving.
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
