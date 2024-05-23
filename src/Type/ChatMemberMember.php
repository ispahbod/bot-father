<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class ChatMemberMember
{
    use DataConstructor;

    /**
     * Retrieves the member's status in the chat.
     *
     * @return string The member's status, always "member".
     */
    public function getStatus(): string
    {
        return $this->data['status'];
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