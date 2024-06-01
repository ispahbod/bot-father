<?php

namespace Ispahbod\BotFather;

use Ispahbod\BotFather\Method\Methods;
use Ispahbod\BotFather\Constant\WebhookType;
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

    public static function process(array $request)
    {
        if (isset($request[WebhookType::MESSAGE])) {
            return new Message($request);
        }

        if (isset($request[WebhookType::EDITED_MESSAGE])) {
            return new Message($request);
        }

        if (isset($request[WebhookType::CHANNEL_POST])) {
            return new Message($request);
        }

        if (isset($request[WebhookType::EDITED_CHANNEL_POST])) {
            return new Message($request);
        }

        if (isset($request[WebhookType::BUSINESS_CONNECTION])) {
            return new BusinessConnection($request);
        }

        if (isset($request[WebhookType::BUSINESS_MESSAGE])) {
            return new Message($request);
        }

        if (isset($request[WebhookType::EDITED_BUSINESS_MESSAGE])) {
            return new Message($request);
        }

        if (isset($request[WebhookType::DELETED_BUSINESS_MESSAGES])) {
            return new BusinessMessagesDeleted($request);
        }

        if (isset($request[WebhookType::MESSAGE_REACTION])) {
            return new MessageReactionUpdated($request);
        }

        if (isset($request[WebhookType::MESSAGE_REACTION_COUNT])) {
            return new MessageReactionCountUpdated($request);
        }

        if (isset($request[WebhookType::INLINE_QUERY])) {
            return new InlineQuery($request);
        }

        if (isset($request[WebhookType::CHOSEN_INLINE_RESULT])) {
            return new ChosenInlineResult($request);
        }

        if (isset($request[WebhookType::CALLBACK_QUERY])) {
            return new CallbackQuery($request);
        }

        if (isset($request[WebhookType::SHIPPING_QUERY])) {
            return new ShippingQuery($request);
        }

        if (isset($request[WebhookType::PRE_CHECKOUT_QUERY])) {
            return new PreCheckoutQuery($request);
        }

        if (isset($request[WebhookType::POLL])) {
            return new Poll($request);
        }

        if (isset($request[WebhookType::POLL_ANSWER])) {
            return new PollAnswer($request);
        }

        if (isset($request[WebhookType::MY_CHAT_MEMBER])) {
            return new ChatMemberUpdated($request);
        }

        if (isset($request[WebhookType::CHAT_MEMBER])) {
            return new ChatMemberUpdated($request);
        }

        if (isset($request[WebhookType::CHAT_JOIN_REQUEST])) {
            return new ChatJoinRequest($request);
        }

        if (isset($request[WebhookType::CHAT_BOOST])) {
            return new ChatBoostUpdated($request);
        }

        if (isset($request[WebhookType::REMOVED_CHAT_BOOST])) {
            return new ChatBoostRemoved($request);
        }
    }

    public function getProcessType(array $request): ?string
    {
        $keys = [
            WebhookType::MESSAGE,
            WebhookType::EDITED_MESSAGE,
            WebhookType::CHANNEL_POST,
            WebhookType::EDITED_CHANNEL_POST,
            WebhookType::BUSINESS_CONNECTION,
            WebhookType::BUSINESS_MESSAGE,
            WebhookType::EDITED_BUSINESS_MESSAGE,
            WebhookType::DELETED_BUSINESS_MESSAGES,
            WebhookType::MESSAGE_REACTION,
            WebhookType::MESSAGE_REACTION_COUNT,
            WebhookType::INLINE_QUERY,
            WebhookType::CHOSEN_INLINE_RESULT,
            WebhookType::CALLBACK_QUERY,
            WebhookType::SHIPPING_QUERY,
            WebhookType::PRE_CHECKOUT_QUERY,
            WebhookType::POLL,
            WebhookType::POLL_ANSWER,
            WebhookType::MY_CHAT_MEMBER,
            WebhookType::CHAT_MEMBER,
            WebhookType::CHAT_JOIN_REQUEST,
            WebhookType::CHAT_BOOST,
            WebhookType::REMOVED_CHAT_BOOST,
        ];
        foreach ($keys as $key) {
            if (isset($request[$key])) {
                $data_key = $key;
                break;
            }
        }
        return $data_key ?? null;
    }
}
