<?php

namespace Ispahbod\BotFather\Field;

use Ispahbod\BotFather\Type\InputFile;
use Ispahbod\BotFather\Type\MessageEntity;
use Ispahbod\BotFather\Type\ReplyParameters;
use Ispahbod\BotFather\Type\InlineKeyboardMarkup;
use Ispahbod\BotFather\Type\ReplyKeyboardMarkup;
use Ispahbod\BotFather\Type\ReplyKeyboardRemove;
use Ispahbod\BotFather\Type\ForceReply;

final class SendDocumentField
{
    /**
     * Optional. Unique identifier of the business connection on behalf of which the document will be sent.
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
     * Required. Document to send. Pass a file_id as String to send a document that exists on the Telegram servers (recommended),
     * pass an HTTP URL as a String for Telegram to get a document from the Internet, or upload a new one using multipart/form-data.
     * @var string|InputFile
     */
    public const DOCUMENT = 'document';

    /**
     * Optional. Thumbnail of the document sent; can be ignored if thumbnail generation for the document is supported server-side.
     * @var string|InputFile|null
     */
    public const THUMBNAIL = 'thumbnail';

    /**
     * Optional. Document caption (may also be used when resending documents by file_id), 0-1024 characters after entities parsing.
     * @var string|null
     */
    public const CAPTION = 'caption';

    /**
     * Optional. Mode for parsing entities in the document caption.
     * @var string|null
     */
    public const PARSE_MODE = 'parse_mode';

    /**
     * Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode.
     * @var array|null
     */
    public const CAPTION_ENTITIES = 'caption_entities';

    /**
     * Optional. Disables automatic server-side content type detection for files uploaded using multipart/form-data.
     * @var bool|null
     */
    public const DISABLE_CONTENT_TYPE_DETECTION = 'disable_content_type_detection';

    /**
     * Optional. Sends the document silently. Users will receive a notification with no sound.
     * @var bool|null
     */
    public const DISABLE_NOTIFICATION = 'disable_notification';

    /**
     * Optional. Protects the contents of the sent document from forwarding and saving.
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

