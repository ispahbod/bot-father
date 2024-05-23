<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class ChatBoostSourceGiveaway
{
    use DataConstructor;

    /**
     * Retrieves the source of the boost.
     * This source is always "giveaway".
     *
     * @return string The source of the boost.
     */
    public function getSource(): string
    {
        return $this->data['source'] ?? 'giveaway';
    }

    /**
     * Retrieves the identifier of a message in the chat with the giveaway.
     * The message could have been deleted already. May be 0 if the message isn't sent yet.
     *
     * @return int The identifier of the giveaway message.
     */
    public function getGiveawayMessageId(): int
    {
        return $this->data['giveaway_message_id'] ?? 0;
    }

    /**
     * Retrieves the user that won the prize in the giveaway, if any.
     * This is optional.
     *
     * @return User|null The user that won the prize, or null if no user won.
     */
    public function getUser(): ?User
    {
        return isset($this->data['user']) ? new User($this->data['user']) : null;
    }

    /**
     * Checks if the giveaway was completed but there was no user to win the prize.
     * This is optional.
     *
     * @return bool True if the giveaway was unclaimed, otherwise false.
     */
    public function isUnclaimed(): bool
    {
        return $this->data['is_unclaimed'] ?? false;
    }
}