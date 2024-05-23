<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class ResponseParameters
{
    use DataConstructor;

    /**
     * Retrieves the identifier to which a group has been migrated if it has been converted to a supergroup.
     * This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it.
     * However, it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @return int|null The identifier of the supergroup if available, otherwise null.
     */
    public function getMigrateToChatId(): ?int
    {
        return $this->data['migrate_to_chat_id'] ?? null;
    }

    /**
     * Retrieves the number of seconds left to wait before the request can be repeated, in case of exceeding flood control.
     *
     * @return int|null The number of seconds to wait if available, otherwise null.
     */
    public function getRetryAfter(): ?int
    {
        return $this->data['retry_after'] ?? null;
    }
}
