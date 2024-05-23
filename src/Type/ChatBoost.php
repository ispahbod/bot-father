<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class ChatBoost
{
    use DataConstructor;

    /**
     * Retrieves the unique identifier of the boost.
     *
     * @return string The unique boost identifier.
     */
    public function getBoostId(): string
    {
        return $this->data['boost_id'];
    }

    /**
     * Retrieves the point in time (Unix timestamp) when the chat was boosted.
     *
     * @return int The add date as a Unix timestamp.
     */
    public function getAddDate(): int
    {
        return $this->data['add_date'];
    }

    /**
     * Retrieves the point in time (Unix timestamp) when the boost will automatically expire.
     *
     * @return int The expiration date as a Unix timestamp.
     */
    public function getExpirationDate(): int
    {
        return $this->data['expiration_date'];
    }

    /**
     * Retrieves the source of the added boost.
     *
     * @return ChatBoostSource The source of the boost.
     */
    public function getSource(): ChatBoostSource
    {
        return new ChatBoostSource($this->data['source']);
    }
}
