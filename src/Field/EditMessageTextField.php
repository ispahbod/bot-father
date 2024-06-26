<?php

namespace Ispahbod\BotFather\Field;

use Ispahbod\BotFather\Type\MessageEntity;
use Ispahbod\BotFather\Type\InlineKeyboardMarkup;
use Ispahbod\BotFather\Type\LinkPreviewOptions;

class EditMessageTextField
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     * Optional. Required if inline_message_id is not specified.
     * @var string|int|null
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Identifier of the message to edit.
     * Optional. Required if inline_message_id is not specified.
     * @var int|null
     */
    public const MESSAGE_ID = 'message_id';

    /**
     * Identifier of the inline message.
     * Optional. Required if chat_id and message_id are not specified.
     * @var string|null
     */
    public const INLINE_MESSAGE_ID = 'inline_message_id';

    /**
     * New text of the message, 1-4096 characters after entities parsing.
     * @var string
     */
    public const TEXT = 'text';

    /**
     * Mode for parsing entities in the message text.
     * Optional. See formatting options for more details.
     * @var string|null
     */
    public const PARSE_MODE = 'parse_mode';

    /**
     * A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode.
     * Optional.
     * @var array<MessageEntity>|null
     */
    public const ENTITIES = 'entities';

    /**
     * Link preview generation options for the message.
     * Optional.
     * @var LinkPreviewOptions|null
     */
    public const LINK_PREVIEW_OPTIONS = 'link_preview_options';

    /**
     * A JSON-serialized object for an inline keyboard.
     * Optional.
     * @var InlineKeyboardMarkup|null
     */
    public const REPLY_MARKUP = 'reply_markup';
}

