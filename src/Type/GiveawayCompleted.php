<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class GiveawayCompleted
{
    use DataConstructor;

    /**
     * Retrieves the number of winners in the giveaway.
     *
     * @return int The number of winners.
     */
    public function getWinnerCount(): int
    {
        return $this->data['winner_count'];
    }

    /**
     * Retrieves the number of undistributed prizes.
     *
     * @return int|null The count of unclaimed prizes.
     */
    public function getUnclaimedPrizeCount(): ?int
    {
        return $this->data['unclaimed_prize_count'] ?? null;
    }

    /**
     * Retrieves the message associated with the giveaway that was completed.
     *
     * @return Message|null The giveaway message if available, otherwise null.
     */
    public function getGiveawayMessage(): ?Message
    {
        return isset($this->data['giveaway_message']) ? new Message($this->data['giveaway_message']) : null;
    }
}
