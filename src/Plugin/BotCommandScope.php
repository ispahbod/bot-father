<?php

namespace Ispahbod\BotFather\Plugin;

final class BotCommandScope
{
    public static function Default(): string
    {
        return json_encode([
            'type' => 'default'
        ]);
    }

    public static function AllPrivateChats(): string
    {
        return json_encode([
            'type' => 'all_private_chats'
        ]);
    }

    public static function AllGroupChats(): string
    {
        return json_encode([
            'type' => 'all_group_chats'
        ]);
    }

    public static function AllChatAdministrators(): string
    {
        return json_encode([
            'type' => 'all_chat_administrators'
        ]);
    }

    public static function Chat(string $chat_id): string
    {
        return json_encode([
            'type' => 'chat',
            'chat_id' => $chat_id,
        ]);
    }

    public static function ChatAdministrators(string $chat_id): string
    {
        return json_encode([
            'type' => 'chat_administrators',
            'chat_id' => $chat_id,
        ]);
    }

    public static function ChatMember(string $chat_id, string $user_id): string
    {
        return json_encode([
            'type' => 'chat_member',
            'chat_id' => $chat_id,
            'user_id' => $user_id,
        ]);
    }
}
