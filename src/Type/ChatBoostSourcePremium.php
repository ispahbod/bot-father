<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class ChatBoostSourcePremium
{
    use DataConstructor;

    /**
     * Retrieves the source of the boost.
     * This source is always "premium".
     *
     * @return string The source of the boost.
     */
    public function getSource(): string
    {
        return $this->data['source'] ?? 'premium';
    }

    /**
     * Retrieves the user that boosted the chat.
     *
     * @return User The user that boosted the chat.
     */
    public function getUser(): User
    {
        return new User($this->data['user']);
    }
}