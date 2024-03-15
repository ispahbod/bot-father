<?php

namespace Ispahbod\BotFather\Plugin;

final class BotCommandScope
{
    public static function Default(): array
    {
        return [
            'type' => 'default'
        ];
    }

    public static function AllPrivateChats(): array
    {
        return [
            'type' => 'all_private_chats'
        ];
    }

    public static function AllGroupChats(): array
    {
        return [
            'type' => 'all_group_chats'
        ];
    }

    public static function AllChatAdministrators(): array
    {
        return [
            'type' => 'all_chat_administrators'
        ];
    }

    public static function Chat(string $chat_id): array
    {
        return [
            'type' => 'chat',
            'chat_id' => $chat_id,
        ];
    }

    public static function ChatAdministrators(string $chat_id): array
    {
        return [
            'type' => 'chat_administrators',
            'chat_id' => $chat_id,
        ];
    }

    public static function ChatMember(string $chat_id, string $user_id): array
    {
        return [
            'type' => 'chat_member',
            'chat_id' => $chat_id,
            'user_id' => $user_id,
        ];
    }
}
