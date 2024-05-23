<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class ChatMemberLeft
{
    use DataConstructor;

    /**
     * Retrieves the member's status in the chat.
     *
     * @return string The member's status, always "left".
     */
    public function getStatus(): string
    {
        return 'left';
    }

    /**
     * Retrieves information about the user.
     *
     * @return User Information about the user.
     */
    public function getUser(): User
    {
        return new User($this->data['user']);
    }
}