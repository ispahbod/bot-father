<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class ReactionCount
{
    use DataConstructor;

    /**
     * Retrieves the type of the reaction.
     *
     * @return ReactionType The type of the reaction.
     */
    public function getType(): ReactionType
    {
        return new ReactionType($this->data['type']);
    }

    /**
     * Retrieves the total number of times the reaction was added.
     *
     * @return int The total count of reactions.
     */
    public function getTotalCount(): int
    {
        return $this->data['total_count'];
    }
}