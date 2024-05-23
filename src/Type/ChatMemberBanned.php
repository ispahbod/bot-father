<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class ChatMemberBanned
{
    use DataConstructor;

    /**
     * Retrieves the member's status in the chat.
     *
     * @return string The member's status, always "kicked".
     */
    public function getStatus(): string
    {
        return 'kicked';
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

    /**
     * Retrieves the date when restrictions will be lifted for this user.
     * If the value is 0, then the user is banned forever.
     *
     * @return int Date as Unix time, or 0 if the user is banned forever.
     */
    public function getUntilDate(): int
    {
        return $this->data['until_date'] ?? 0;
    }
}