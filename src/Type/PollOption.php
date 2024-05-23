<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class PollOption
{
    use DataConstructor;
    /**
     * Retrieves the text of the poll option.
     * This text represents the option provided in the poll, and it must be between 1 and 100 characters.
     *
     * @return string The text of the poll option.
     */
    public function getText(): string
    {
        return $this->data['text'];
    }

    /**
     * Retrieves special entities like custom emojis that appear in the poll option text, if any.
     * These entities are optional and are used to parse the text for display formatting.
     *
     * @return array|null An array of MessageEntity objects if present, or null if there are no special entities.
     */
    public function getTextEntities(): ?array
    {
        return $this->data['text_entities'] ?? null;
    }

    /**
     * Retrieves the number of users who have voted for this poll option.
     * This count reflects the popularity or preference of the option among the poll participants.
     *
     * @return int The number of users that voted for this option.
     */
    public function getVoterCount(): int
    {
        return $this->data['voter_count'];
    }
}
