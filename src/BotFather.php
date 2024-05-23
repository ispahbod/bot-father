<?php

namespace Ispahbod\BotFather;

use Ispahbod\BotFather\Method\Chat;
use Ispahbod\BotFather\Method\Game;
use Ispahbod\BotFather\Method\Getter;
use Ispahbod\BotFather\Method\Inline;
use Ispahbod\BotFather\Method\Methods;
use Ispahbod\BotFather\Method\Passport;
use Ispahbod\BotFather\Method\Payment;
use Ispahbod\BotFather\Method\Process;
use Ispahbod\BotFather\Method\Sender;
use Ispahbod\BotFather\Method\Setter;
use Ispahbod\BotFather\Method\Modifier;
use Ispahbod\BotFather\Method\Webhook;
use Ispahbod\BotFather\Constant\WebhookType;
use Ispahbod\BotFather\Interface\BotFatherInterface;
use Ispahbod\BotFather\Trait\TokenConstructor;

final class BotFather
{
    use TokenConstructor;

    public static function Methods(string $token): Passport
    {
        return new Methods($token);
    }

    public static function Process(string $json): Process
    {
        $request = json_decode($json, true);
        $keys = [
            WebhookType::MESSAGE, WebhookType::EDITED_MESSAGE, WebhookType::CHANNEL_POST, WebhookType::EDITED_CHANNEL_POST,
            WebhookType::INLINE_QUERY, WebhookType::CHOSEN_INLINE_RESULT, WebhookType::CALLBACK_QUERY, WebhookType::SHIPPING_QUERY,
            WebhookType::PRE_CHECKOUT_QUERY, WebhookType::POLL, WebhookType::POLL_ANSWER, WebhookType::MY_CHAT_MEMBER, WebhookType::CHAT_MEMBER,
            WebhookType::CHAT_JOIN_REQUEST, WebhookType::CHAT_BOOST, WebhookType::REMOVED_CHAT_BOOST,
            WebhookType::MESSAGE_REACTION, WebhookType::MESSAGE_REACTION_COUNT
        ];
        foreach ($keys as $key) {
            if (isset($request[$key])) {
                $data_key = $key;
                break;
            }
        }
        $data = isset($data_key) ? $request[$data_key] : [];
        return new Process($data, $data_key ?? '');
    }
}
