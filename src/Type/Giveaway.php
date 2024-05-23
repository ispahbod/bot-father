<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class Giveaway
{
    use DataConstructor;
    /**
     * Retrieves an array of Chat objects representing the chats a user must join to participate in the giveaway.
     *
     * @return array Array of Chat objects.
     */
    public function getChats(): array
    {
        return array_map(function ($chat) {
            return new Chat($chat);
        }, $this->data['chats'] ?? []);
    }

    /**
     * Retrieves the Unix timestamp when the winners of the giveaway will be selected.
     *
     * @return int Unix timestamp of winners selection.
     */
    public function getWinnersSelectionDate(): int
    {
        return $this->data['winners_selection_date'];
    }

    /**
     * Retrieves the number of users who will be selected as winners of the giveaway.
     *
     * @return int The count of winners.
     */
    public function getWinnerCount(): int
    {
        return $this->data['winner_count'];
    }

    /**
     * Determines if only users who join the chats after the giveaway started are eligible to win.
     *
     * @return bool True if only new members are eligible, otherwise false.
     */
    public function isOnlyNewMembers(): bool
    {
        return $this->data['only_new_members'] ?? false;
    }

    /**
     * Determines if the list of giveaway winners will be visible to everyone.
     *
     * @return bool True if winners are public, otherwise false.
     */
    public function hasPublicWinners(): bool
    {
        return $this->data['has_public_winners'] ?? false;
    }

    /**
     * Retrieves the description of the additional giveaway prize, if available.
     *
     * @return string|null The prize description or null if not specified.
     */
    public function getPrizeDescription(): ?string
    {
        return $this->data['prize_description'] ?? null;
    }

    /**
     * Retrieves a list of two-letter ISO 3166-1 alpha-2 country codes indicating the eligible countries for the giveaway.
     * If empty, all users can participate. Users with a phone number bought on Fragment can always participate.
     *
     * @return array|null Array of country codes or null if not specified.
     */
    public function getCountryCodes(): ?array
    {
        return $this->data['country_codes'] ?? null;
    }

    /**
     * Retrieves the number of months the Telegram Premium subscription won from the giveaway will be active.
     *
     * @return int|null The number of months or null if not specified.
     */
    public function getPremiumSubscriptionMonthCount(): ?int
    {
        return $this->data['premium_subscription_month_count'] ?? null;
    }
}
