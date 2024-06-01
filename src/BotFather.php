<?php

namespace Ispahbod\BotFather;

use Ispahbod\BotFather\Method\Methods;
use Ispahbod\BotFather\Constant\WebhookContentType;
use Ispahbod\BotFather\Trait\TokenConstructor;
use Ispahbod\BotFather\Type\BusinessConnection;
use Ispahbod\BotFather\Type\BusinessMessagesDeleted;
use Ispahbod\BotFather\Type\CallbackQuery;
use Ispahbod\BotFather\Type\ChatBoostRemoved;
use Ispahbod\BotFather\Type\ChatBoostUpdated;
use Ispahbod\BotFather\Type\ChatJoinRequest;
use Ispahbod\BotFather\Type\ChatMemberUpdated;
use Ispahbod\BotFather\Type\ChosenInlineResult;
use Ispahbod\BotFather\Type\InlineQuery;
use Ispahbod\BotFather\Type\Message;
use Ispahbod\BotFather\Type\MessageReactionCountUpdated;
use Ispahbod\BotFather\Type\MessageReactionUpdated;
use Ispahbod\BotFather\Type\Poll;
use Ispahbod\BotFather\Type\PollAnswer;
use Ispahbod\BotFather\Type\PreCheckoutQuery;
use Ispahbod\BotFather\Type\ShippingQuery;

final class BotFather
{
    use TokenConstructor;

    public static function methods(string $token): Methods
    {
        return new Methods($token);
    }

    public static function process(array $request): mixed
    {
        if (isset($request[WebhookContentType::MESSAGE])) {
            return new Message($request);
        }

        if (isset($request[WebhookContentType::EDITED_MESSAGE])) {
            return new Message($request);
        }

        if (isset($request[WebhookContentType::CHANNEL_POST])) {
            return new Message($request);
        }

        if (isset($request[WebhookContentType::EDITED_CHANNEL_POST])) {
            return new Message($request);
        }

        if (isset($request[WebhookContentType::BUSINESS_CONNECTION])) {
            return new BusinessConnection($request);
        }

        if (isset($request[WebhookContentType::BUSINESS_MESSAGE])) {
            return new Message($request);
        }

        if (isset($request[WebhookContentType::EDITED_BUSINESS_MESSAGE])) {
            return new Message($request);
        }

        if (isset($request[WebhookContentType::DELETED_BUSINESS_MESSAGES])) {
            return new BusinessMessagesDeleted($request);
        }

        if (isset($request[WebhookContentType::MESSAGE_REACTION])) {
            return new MessageReactionUpdated($request);
        }

        if (isset($request[WebhookContentType::MESSAGE_REACTION_COUNT])) {
            return new MessageReactionCountUpdated($request);
        }

        if (isset($request[WebhookContentType::INLINE_QUERY])) {
            return new InlineQuery($request);
        }

        if (isset($request[WebhookContentType::CHOSEN_INLINE_RESULT])) {
            return new ChosenInlineResult($request);
        }

        if (isset($request[WebhookContentType::CALLBACK_QUERY])) {
            return new CallbackQuery($request);
        }

        if (isset($request[WebhookContentType::SHIPPING_QUERY])) {
            return new ShippingQuery($request);
        }

        if (isset($request[WebhookContentType::PRE_CHECKOUT_QUERY])) {
            return new PreCheckoutQuery($request);
        }

        if (isset($request[WebhookContentType::POLL])) {
            return new Poll($request);
        }

        if (isset($request[WebhookContentType::POLL_ANSWER])) {
            return new PollAnswer($request);
        }

        if (isset($request[WebhookContentType::MY_CHAT_MEMBER])) {
            return new ChatMemberUpdated($request);
        }

        if (isset($request[WebhookContentType::CHAT_MEMBER])) {
            return new ChatMemberUpdated($request);
        }

        if (isset($request[WebhookContentType::CHAT_JOIN_REQUEST])) {
            return new ChatJoinRequest($request);
        }

        if (isset($request[WebhookContentType::CHAT_BOOST])) {
            return new ChatBoostUpdated($request);
        }

        if (isset($request[WebhookContentType::REMOVED_CHAT_BOOST])) {
            return new ChatBoostRemoved($request);
        }
        return null;
    }
}
