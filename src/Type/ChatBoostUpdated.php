<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class ChatBoostUpdated
{
    use DataConstructor;

    /**
     * Retrieves the chat which was boosted.
     *
     * @return Chat The chat object.
     */
    public function getChat(): Chat
    {
        return new Chat($this->data['chat']);
    }

    /**
     * Retrieves information about the chat boost.
     *
     * @return ChatBoost The chat boost object.
     */
    public function getBoost(): ChatBoost
    {
        return new ChatBoost($this->data['boost']);
    }

}
