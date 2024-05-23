<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class BotCommandScopeAllPrivateChats
{
    use DataConstructor;

    /**
     * Retrieves the scope type of the command.
     * This type is always 'all_private_chats'.
     *
     * @return string The scope type.
     */
    public function getType(): string
    {
        return $this->data['type'] ?? 'all_private_chats';
    }
}