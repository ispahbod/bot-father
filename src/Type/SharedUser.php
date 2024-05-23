<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class SharedUser
{
    use DataConstructor;

    /**
     * Retrieves the identifier of the shared user. This identifier may have more than 32 significant bits,
     * but at most 52 significant bits, so it is safe to store it as a 64-bit integer or double-precision float.
     * Note: The bot may not have access to the user and could be unable to use this identifier unless the user
     * is already known to the bot by some other means.
     *
     * @return int Identifier of the shared user.
     */
    public function getUserId(): int
    {
        return $this->data['user_id'];
    }

    /**
     * Retrieves the first name of the user if it was requested by the bot.
     *
     * @return string|null First name of the user, or null if not available.
     */
    public function getFirstName(): ?string
    {
        return $this->data['first_name'] ?? null;
    }

    /**
     * Retrieves the last name of the user if it was requested by the bot.
     *
     * @return string|null Last name of the user, or null if not available.
     */
    public function getLastName(): ?string
    {
        return $this->data['last_name'] ?? null;
    }

    /**
     * Retrieves the username of the user if it was requested by the bot.
     *
     * @return string|null Username of the user, or null if not available.
     */
    public function getUsername(): ?string
    {
        return $this->data['username'] ?? null;
    }

    /**
     * Retrieves the available sizes of the chat photo if the photo was requested by the bot.
     * Each size is represented by a PhotoSize object.
     *
     * @return array|null Array of PhotoSize objects representing the available sizes of the chat photo, or null if not available.
     */
    public function getPhoto(): ?array
    {
        return isset($this->data['photo']) ? array_map(function ($photoSize) {
            return new PhotoSize($photoSize);
        }, $this->data['photo']) : null;
    }
}