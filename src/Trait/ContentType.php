<?php

namespace Ispahbod\BotFather\Trait;

use Ispahbod\BotFather\Constant\WebhookType;

trait ContentType
{
    public function getContentType(): ?string
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
            if (isset($this->data[$key])) {
                $data_key = $key;
                break;
            }
        }
        return $data_key ?? null;
    }
}