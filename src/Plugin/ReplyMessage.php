<?php

namespace Ispahbod\BotFather\Plugin;

use Ispahbod\BotFather\Field\ReplyParametersField;

class ReplyMessage
{
    public static function getParams(int $messageId, bool $allowWithoutReply = true): array
    {
        return [
            ReplyParametersField::MESSAGE_ID => $messageId,
            ReplyParametersField::ALLOW_SENDING_WITHOUT_REPLY => $allowWithoutReply,
        ];
    }

    public static function getQuoteParams(int $messageId, string $quote, bool $allowWithoutReply = true): array
    {
        return [
            ReplyParametersField::MESSAGE_ID => $messageId,
            ReplyParametersField::QUOTE => $quote,
            ReplyParametersField::ALLOW_SENDING_WITHOUT_REPLY => $allowWithoutReply,
        ];
    }

    public static function getChatParams(int $chatId, int $messageId, bool $allowWithoutReply = true): array
    {
        return [
            ReplyParametersField::CHAT_ID => $chatId,
            ReplyParametersField::MESSAGE_ID => $messageId,
            ReplyParametersField::ALLOW_SENDING_WITHOUT_REPLY => $allowWithoutReply,
        ];
    }

    public static function getQuoteEntitiesParams(int $messageId, array $entities, bool $allowWithoutReply = true): array
    {
        return [
            ReplyParametersField::MESSAGE_ID => $messageId,
            ReplyParametersField::QUOTE_ENTITIES => $entities,
            ReplyParametersField::ALLOW_SENDING_WITHOUT_REPLY => $allowWithoutReply,
        ];
    }

    public static function getQuotePositionParams(int $messageId, int $position, bool $allowWithoutReply = true): array
    {
        return [
            ReplyParametersField::MESSAGE_ID => $messageId,
            ReplyParametersField::QUOTE_POSITION => $position,
            ReplyParametersField::ALLOW_SENDING_WITHOUT_REPLY => $allowWithoutReply,
        ];
    }

    public static function getQuoteParseModeParams(int $messageId, string $parseMode, bool $allowWithoutReply = true): array
    {
        return [
            ReplyParametersField::MESSAGE_ID => $messageId,
            ReplyParametersField::QUOTE_PARSE_MODE => $parseMode,
            ReplyParametersField::ALLOW_SENDING_WITHOUT_REPLY => $allowWithoutReply,
        ];
    }
}