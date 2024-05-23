<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class KeyboardButtonRequestUsers
{
    use DataConstructor;

    /**
     * Retrieves the signed 32-bit identifier of the request.
     *
     * @return int The request identifier.
     */
    public function getRequestId(): int
    {
        return $this->data['request_id'];
    }

    /**
     * Checks if the request is for bots.
     *
     * @return bool|null True if requesting bots, false if requesting regular users, null if not specified.
     */
    public function isUserBot(): ?bool
    {
        return $this->data['user_is_bot'] ?? null;
    }

    /**
     * Checks if the request is for premium users.
     *
     * @return bool|null True if requesting premium users, false if requesting non-premium users, null if not specified.
     */
    public function isUserPremium(): ?bool
    {
        return $this->data['user_is_premium'] ?? null;
    }

    /**
     * Retrieves the maximum number of users to be selected.
     *
     * @return int The maximum number of users, defaults to 1.
     */
    public function getMaxQuantity(): int
    {
        return $this->data['max_quantity'] ?? 1;
    }

    /**
     * Checks if the request includes users' first and last names.
     *
     * @return bool|null True if requesting users' names, null if not specified.
     */
    public function isRequestName(): ?bool
    {
        return $this->data['request_name'] ?? null;
    }

    /**
     * Checks if the request includes users' usernames.
     *
     * @return bool|null True if requesting users' usernames, null if not specified.
     */
    public function isRequestUsername(): ?bool
    {
        return $this->data['request_username'] ?? null;
    }

    /**
     * Checks if the request includes users' photos.
     *
     * @return bool|null True if requesting users' photos, null if not specified.
     */
    public function isRequestPhoto(): ?bool
    {
        return $this->data['request_photo'] ?? null;
    }
}