<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class UsersShared
{
    use DataConstructor;
    /**
     * Retrieves the identifier of the request.
     *
     * @return int Identifier of the request.
     */
    public function getRequestId(): int
    {
        return $this->data['request_id'];
    }

    /**
     * Retrieves information about users shared with the bot.
     *
     * @return array|null Array of SharedUser objects if available, otherwise null.
     */
    public function getUsers(): ?array
    {
        return isset($this->data['users']) ? array_map(function ($user) {
            return new SharedUser($user);
        }, $this->data['users']) : null;
    }
}
