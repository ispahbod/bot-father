<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class ChatBoostAdded
{
    use DataConstructor;
    /**
     * Retrieves the number of boosts added by the user.
     *
     * @return int The number of boosts added.
     */
    public function getBoostCount(): int
    {
        return $this->data['boost_count'];
    }
}