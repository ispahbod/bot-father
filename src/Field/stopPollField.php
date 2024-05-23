<?php

namespace Ispahbod\BotFather\Field;

use Ispahbod\BotFather\Type\InlineKeyboardMarkup;

final class StopPollField
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     * @var string|int
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Identifier of the original message with the poll.
     * @var int
     */
    public const MESSAGE_ID = 'message_id';

    /**
     * A JSON-serialized object for a new message inline keyboard.
     * @var InlineKeyboardMarkup|null
     */
    public const REPLY_MARKUP = 'reply_markup';
}
