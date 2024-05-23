<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class ChatBoostSourceGiftCode
{
    use DataConstructor;

    /**
     * Retrieves the source of the boost.
     *
     * @return string The source of the boost.
     */
    public function getSource(): string
    {
        return $this->data['source'];
    }

    /**
     * Retrieves the user for which the gift code was created.
     *
     * @return User The user object.
     */
    public function getUser(): User
    {
        return new User($this->data['user']);
    }
}