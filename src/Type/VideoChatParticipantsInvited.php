<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class VideoChatParticipantsInvited
{
    use DataConstructor;
    /**
     * Retrieves an array of User objects representing new members that were invited to the video chat.
     *
     * @return array|null Array of User objects if available, otherwise null.
     */
    public function getUsers(): ?array
    {
        return isset($this->data['users']) ? array_map(function ($user) {
            return new User($user);
        }, $this->data['users']) : null;
    }
}
