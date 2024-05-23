<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class GiveawayWinners
{
    use DataConstructor;
    /**
     * Retrieves the chat that created the giveaway.
     *
     * @return Chat The chat object.
     */
    public function getChat(): Chat
    {
        return new Chat($this->data['chat']);
    }

    /**
     * Retrieves the identifier of the message with the giveaway in the chat.
     *
     * @return int The giveaway message identifier.
     */
    public function getGiveawayMessageId(): int
    {
        return $this->data['giveaway_message_id'];
    }

    /**
     * Retrieves the Unix timestamp when winners of the giveaway were selected.
     *
     * @return int The winners selection date as a Unix timestamp.
     */
    public function getWinnersSelectionDate(): int
    {
        return $this->data['winners_selection_date'];
    }

    /**
     * Retrieves the total number of winners in the giveaway.
     *
     * @return int The total number of winners.
     */
    public function getWinnerCount(): int
    {
        return $this->data['winner_count'];
    }

    /**
     * Retrieves a list of up to 100 winners of the giveaway.
     *
     * @return array|null Array of User objects if available, otherwise null.
     */
    public function getWinners(): ?array
    {
        return isset($this->data['winners']) ? array_map(function ($user) {
            return new User($user);
        }, $this->data['winners']) : null;
    }

    /**
     * Retrieves the number of other chats the user had to join in order to be eligible for the giveaway.
     *
     * @return int|null The number of additional chats.
     */
    public function getAdditionalChatCount(): ?int
    {
        return $this->data['additional_chat_count'] ?? null;
    }

    /**
     * Retrieves the number of months the Telegram Premium subscription won from the giveaway will be active for.
     *
     * @return int|null The number of months of the premium subscription.
     */
    public function getPremiumSubscriptionMonthCount(): ?int
    {
        return $this->data['premium_subscription_month_count'] ?? null;
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
     * Determines if only users who had joined the chats after the giveaway started were eligible to win.
     *
     * @return bool True if only new members were eligible, otherwise false.
     */
    public function isOnlyNewMembers(): bool
    {
        return $this->data['only_new_members'] ?? false;
    }

    /**
     * Determines if the giveaway was canceled because the payment for it was refunded.
     *
     * @return bool True if the giveaway was refunded, otherwise false.
     */
    public function wasRefunded(): bool
    {
        return $this->data['was_refunded'] ?? false;
    }

    /**
     * Retrieves the description of additional giveaway prize, if available.
     *
     * @return string|null The description of the prize.
     */
    public function getPrizeDescription(): ?string
    {
        return $this->data['prize_description'] ?? null;
    }
}
