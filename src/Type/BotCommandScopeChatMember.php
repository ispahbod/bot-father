<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class BotCommandScopeChatMember
{
    use DataConstructor;

    /**
     * Retrieves the scope type of the command.
     * This type is always 'chat_member'.
     *
     * @return string The scope type.
     */
    public function getType(): string
    {
        return $this->data['type'] ?? 'chat_member';
    }

    /**
     * Retrieves the unique identifier for the target chat or username of the target supergroup.
     * This can be an integer for the chat ID or a string if it's a username in the format @supergroupusername.
     *
     * @return int|string The unique identifier for the target chat or the username of the target supergroup.
     */
    public function getChatId()
    {
        return $this->data['chat_id'];
    }

    /**
     * Retrieves the unique identifier of the target user.
     *
     * @return int The unique identifier of the target user.
     */
    public function getUserId(): int
    {
        return $this->data['user_id'];
    }
}