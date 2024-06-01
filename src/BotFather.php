<?php

namespace Ispahbod\BotFather;

use Ispahbod\BotFather\Method\Methods;
use Ispahbod\BotFather\Constant\WebhookContentType;
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
    private ?string $token;
    private ?array $data;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public function process(?array $data): void
    {
        $this->token = $data;
    }

    public function methods(): Methods
    {
        return new Methods($this->token);
    }

    public function type(): ?string
    {
        $keys = [
            WebhookContentType::MESSAGE,
            WebhookContentType::EDITED_MESSAGE,
            WebhookContentType::CHANNEL_POST,
            WebhookContentType::EDITED_CHANNEL_POST,
            WebhookContentType::BUSINESS_CONNECTION,
            WebhookContentType::BUSINESS_MESSAGE,
            WebhookContentType::EDITED_BUSINESS_MESSAGE,
            WebhookContentType::DELETED_BUSINESS_MESSAGES,
            WebhookContentType::MESSAGE_REACTION,
            WebhookContentType::MESSAGE_REACTION_COUNT,
            WebhookContentType::INLINE_QUERY,
            WebhookContentType::CHOSEN_INLINE_RESULT,
            WebhookContentType::CALLBACK_QUERY,
            WebhookContentType::SHIPPING_QUERY,
            WebhookContentType::PRE_CHECKOUT_QUERY,
            WebhookContentType::POLL,
            WebhookContentType::POLL_ANSWER,
            WebhookContentType::MY_CHAT_MEMBER,
            WebhookContentType::CHAT_MEMBER,
            WebhookContentType::CHAT_JOIN_REQUEST,
            WebhookContentType::CHAT_BOOST,
            WebhookContentType::REMOVED_CHAT_BOOST,
        ];
        foreach ($keys as $key) {
            if (isset($this->data[$key])) {
                $data_key = $key;
                break;
            }
        }
        return $data_key ?? null;
    }

    public function message(): ?Message
    {
        return new Message($this->data[WebhookContentType::MESSAGE]);
    }

    public function editedMessage(): ?Message
    {
        return new Message($this->data[WebhookContentType::EDITED_MESSAGE]);
    }

    public function channelPost(): ?Message
    {
        return new Message($this->data[WebhookContentType::CHANNEL_POST]);
    }

    public function editedChannelPost(): ?Message
    {
        return new Message($this->data[WebhookContentType::EDITED_CHANNEL_POST]);
    }

    public function businessConnection(): ?BusinessConnection
    {
        return new BusinessConnection($this->data[WebhookContentType::BUSINESS_CONNECTION]);
    }

    public function businessMessage(): ?Message
    {
        return new Message($this->data[WebhookContentType::BUSINESS_MESSAGE]);
    }

    public function editedBusinessMessage(): ?Message
    {
        return new Message($this->data[WebhookContentType::EDITED_BUSINESS_MESSAGE]);
    }

    public function deletedBusinessMessages(): ?BusinessMessagesDeleted
    {
        return new BusinessMessagesDeleted($this->data[WebhookContentType::DELETED_BUSINESS_MESSAGES]);
    }

    public function messageReactionUpdated(): ?MessageReactionUpdated
    {
        return new MessageReactionUpdated($this->data[WebhookContentType::MESSAGE_REACTION]);
    }

    public function messageReactionCount(): ?MessageReactionCountUpdated
    {
        return new MessageReactionCountUpdated($this->data[WebhookContentType::MESSAGE_REACTION_COUNT]);
    }

    public function inlineQuery(): ?InlineQuery
    {
        return new MessageReactionCountUpdated($this->data[WebhookContentType::INLINE_QUERY]);
    }

    public function chosenInlineResult(): ?ChosenInlineResult
    {
        return new ChosenInlineResult($this->data[WebhookContentType::CHOSEN_INLINE_RESULT]);
    }

    public function callbackQuery(): ?CallbackQuery
    {
        return new CallbackQuery($this->data[WebhookContentType::CALLBACK_QUERY]);
    }

    public function shippingQuery(): ?ShippingQuery
    {
        return new ShippingQuery($this->data[WebhookContentType::SHIPPING_QUERY]);
    }

    public function preCheckoutQuery(): ?PreCheckoutQuery
    {
        return new PreCheckoutQuery($this->data[WebhookContentType::PRE_CHECKOUT_QUERY]);
    }

    public function poll(): ?Poll
    {
        return new Poll($this->data[WebhookContentType::POLL]);
    }

    public function pollAnswer(): ?PollAnswer
    {
        return new PollAnswer($this->data[WebhookContentType::POLL_ANSWER]);
    }

    public function myChatMember(): ?ChatMemberUpdated
    {
        return new ChatMemberUpdated($this->data[WebhookContentType::MY_CHAT_MEMBER]);
    }

    public function chatMember(): ?ChatMemberUpdated
    {
        return new ChatMemberUpdated($this->data[WebhookContentType::CHAT_MEMBER]);
    }

    public function chatJoinRequest(): ?ChatJoinRequest
    {
        return new ChatJoinRequest($this->data[WebhookContentType::CHAT_JOIN_REQUEST]);
    }

    public function chatBoost(): ?ChatBoostUpdated
    {
        return new ChatBoostUpdated($this->data[WebhookContentType::CHAT_BOOST]);
    }

    public function removedChatBoost(): ?ChatBoostRemoved
    {
        return new ChatBoostRemoved($this->data[WebhookContentType::REMOVED_CHAT_BOOST]);
    }
}