<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class UserChatBoosts
{
    use DataConstructor;

    /**
     * Retrieves the list of boosts added to the chat by the user.
     *
     * @return array An array of ChatBoost objects.
     */
    public function getBoosts(): array
    {
        return array_map(function ($boost) {
            return new ChatBoost($boost);
        }, $this->data['boosts'] ?? []);
    }
}
