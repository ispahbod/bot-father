<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class ReplyParameters
{
    use DataConstructor;
    
    /**
     * Retrieves the identifier of the message that will be replied to in the current chat, or in the chat chat_id if it is specified.
     * 
     * @return int The identifier of the message.
     */
    public function getMessageId(): int
    {
        return $this->data['message_id'] ?? 0;
    }

    /**
     * Retrieves the unique identifier for the chat or username of the channel (in the format @channelusername) if the message to be replied to is from a different chat.
     * This is not supported for messages sent on behalf of a business account.
     * 
     * @return int|string|null The chat ID or channel username, or null if not specified.
     */
    public function getChatId()
    {
        return $this->data['chat_id'] ?? null; // Can be Integer or String
    }

    /**
     * Determines if the message should be sent even if the specified message to be replied to is not found.
     * Always False for replies in another chat or forum topic. Always True for messages sent on behalf of a business account.
     * 
     * @return bool True if the message can be sent without a reply, otherwise false.
     */
    public function getAllowSendingWithoutReply(): bool
    {
        return $this->data['allow_sending_without_reply'] ?? false;
    }

    /**
     * Retrieves the quoted part of the message to be replied to; 0-1024 characters after entities parsing.
     * The quote must be an exact substring of the message to be replied to, including bold, italic, underline, strikethrough, spoiler, and custom_emoji entities.
     * The message will fail to send if the quote isn't found in the original message.
     * 
     * @return string|null The quote or null if not specified.
     */
    public function getQuote(): ?string
    {
        return $this->data['quote'] ?? null;
    }

    /**
     * Retrieves the mode for parsing entities in the quote.
     * See formatting options for more details.
     * 
     * @return string|null The parse mode or null if not specified.
     */
    public function getQuoteParseMode(): ?string
    {
        return $this->data['quote_parse_mode'] ?? null;
    }

    /**
     * Retrieves a JSON-serialized list of special entities that appear in the quote.
     * It can be specified instead of quote_parse_mode.
     * 
     * @return array|null Array of MessageEntity objects or null if not specified.
     */
    public function getQuoteEntities(): ?array
    {
        return isset($this->data['quote_entities']) ? json_decode($this->data['quote_entities'], true) : null;
    }

    /**
     * Retrieves the position of the quote in the original message in UTF-16 code units.
     * 
     * @return int|null The position of the quote or null if not specified.
     */
    public function getQuotePosition(): ?int
    {
        return $this->data['quote_position'] ?? null;
    }

}