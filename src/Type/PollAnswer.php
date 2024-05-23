<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class PollAnswer
{
    use DataConstructor;
    /**
     * Retrieves the unique poll identifier.
     *
     * @return string The unique identifier of the poll.
     */
    public function getPollId(): string
    {
        return $this->data['poll_id'];
    }

    /**
     * Retrieves the chat that changed the answer to the poll, if the voter is anonymous.
     * This is optional and may be null if the voter isn't anonymous or if the data isn't available.
     *
     * @return array|null The chat information if available, or null otherwise.
     */
    public function getVoterChat(): ?array
    {
        return $this->data['voter_chat'] ?? null;
    }

    /**
     * Retrieves the user that changed the answer to the poll, if the voter isn't anonymous.
     * This is optional and may be null if the voter is anonymous or if the data isn't available.
     *
     * @return array|null The user information if available, or null otherwise.
     */
    public function getUser(): ?array
    {
        return $this->data['user'] ?? null;
    }

    /**
     * Retrieves the 0-based identifiers of chosen answer options.
     * This may be empty if the vote was retracted.
     *
     * @return array The identifiers of the chosen answer options, or an empty array if none.
     */
    public function getOptionIds(): array
    {
        return $this->data['option_ids'] ?? [];
    }
}
