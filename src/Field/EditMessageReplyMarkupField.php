<?php

namespace Ispahbod\BotFather\Field;

use Ispahbod\BotFather\Type\InlineKeyboardMarkup;

final class EditMessageReplyMarkupField
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
     * A JSON-serialized object for an inline keyboard.
     * Optional.
     * @var InlineKeyboardMarkup|null
     */
    public const REPLY_MARKUP = 'reply_markup';
}
