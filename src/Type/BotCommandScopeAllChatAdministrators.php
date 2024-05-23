<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class BotCommandScopeAllChatAdministrators
{
    use DataConstructor;

    /**
     * Retrieves the scope type of the command.
     * This type is always 'all_chat_administrators'.
     *
     * @return string The scope type.
     */
    public function getType(): string
    {
        return $this->data['type'] ?? 'all_chat_administrators';
    }
}