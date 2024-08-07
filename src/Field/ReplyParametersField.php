<?php

namespace Ispahbod\BotFather\Field;

class ReplyParametersField
{
    // Optional. Quoted part of the message to be replied to; 0-1024 characters after entities parsing. 
    // The quote must be an exact substring of the message to be replied to, including bold, italic, underline, 
    // strikethrough, spoiler, and custom_emoji entities. The message will fail to send if the quote isn't found in the original message.
    public const QUOTE = 'quote';

    // Optional. If the message to be replied to is from a different chat, unique identifier for the chat or username of the channel 
    // (in the format @channelusername). Not supported for messages sent on behalf of a business account.
    public const CHAT_ID = 'chat_id';

    // Identifier of the message that will be replied to in the current chat, or in the chat chat_id if it is specified.
    public const MESSAGE_ID = 'message_id';

    // Optional. A JSON-serialized list of special entities that appear in the quote. It can be specified instead of quote_parse_mode.
    public const QUOTE_ENTITIES = 'quote_entities';

    // Optional. Position of the quote in the original message in UTF-16 code units.
    public const QUOTE_POSITION = 'quote_position';

    // Optional. Mode for parsing entities in the quote. See formatting options for more details.
    public const QUOTE_PARSE_MODE = 'quote_parse_mode';

    // Optional. Pass True if the message should be sent even if the specified message to be replied to is not found. 
    // Always False for replies in another chat or forum topic. Always True for messages sent on behalf of a business account.
    public const ALLOW_SENDING_WITHOUT_REPLY = 'allow_sending_without_reply';
} 
