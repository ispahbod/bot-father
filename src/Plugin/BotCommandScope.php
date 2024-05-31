<?php

namespace Ispahbod\BotFather\Plugin;

final class BotCommandScope
{
    public static function default(): array
    {
        return [
            'type' => 'default'
        ];
    }

    public static function allPrivateChats(): array
    {
        return [
            'type' => 'all_private_chats'
        ];
    }

    public static function allGroupChats(): array
    {
        return [
            'type' => 'all_group_chats'
        ];
    }

    public static function allChatAdministrators(): array
    {
        return [
            'type' => 'all_chat_administrators'
        ];
    }

    public static function chat(string $chat_id): array
    {
        return [
            'type' => 'chat',
            'chat_id' => $chat_id,
        ];
    }

    public static function chatAdministrators(string $chat_id): array
    {
        return [
            'type' => 'chat_administrators',
            'chat_id' => $chat_id,
        ];
    }

    public static function chatMember(string $chat_id, string $user_id): array
    {
        return [
            'type' => 'chat_member',
            'chat_id' => $chat_id,
            'user_id' => $user_id,
        ];
    }
}
