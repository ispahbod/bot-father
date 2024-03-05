<?php

namespace Ispahbod\BotFather;

use Ispahbod\BotFather\Class\Chat;
use Ispahbod\BotFather\Class\Game;
use Ispahbod\BotFather\Class\Getter;
use Ispahbod\BotFather\Class\Inline;
use Ispahbod\BotFather\Class\Passport;
use Ispahbod\BotFather\Class\Payment;
use Ispahbod\BotFather\Class\Process;
use Ispahbod\BotFather\Class\Sender;
use Ispahbod\BotFather\Class\Setter;
use Ispahbod\BotFather\Class\Modifier;
use Ispahbod\BotFather\Class\Webhook;
use Ispahbod\BotFather\Constant\WebhookType;
use Ispahbod\BotFather\Interface\BotFatherInterface;
use Ispahbod\BotFather\Trait\TokenConstructor;

final class BotFather implements BotFatherInterface
{
    use TokenConstructor;

    public static function Inline(string $token): Inline
    {
        return new Inline($token);
    }

    public static function Chat(string $token): Chat
    {
        return new Chat($token);
    }

    public static function Setter(string $token): Setter
    {
        return new Setter($token);
    }

    public static function Sender(string $token): Sender
    {
        return new Sender($token);
    }

    public static function Getter(string $token): Getter
    {
        return new Getter($token);
    }

    public static function Modifier(string $token): Modifier
    {
        return new Modifier($token);
    }

    public static function Webhook(string $token): Webhook
    {
        return new Webhook($token);
    }

    public static function Payment(string $token): Payment
    {
        return new Payment($token);
    }

    public static function Game(string $token): Game
    {
        return new Game($token);
    }

    public static function Passport(string $token): Passport
    {
        return new Passport($token);
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
