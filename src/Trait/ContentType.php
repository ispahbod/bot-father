<?php

namespace Ispahbod\BotFather\Trait;

use Ispahbod\BotFather\Constant\WebhookContentType;

trait ContentType
{
    public function getContentType(): ?string
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
}