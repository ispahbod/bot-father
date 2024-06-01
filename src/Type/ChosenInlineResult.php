<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\ContentType;
use Ispahbod\BotFather\Trait\DataConstructor;

class ChosenInlineResult
{
    use DataConstructor;
    use ContentType;

    /**
     * Retrieves the unique identifier for the result that was chosen.
     * 
     * @return string|null The unique identifier if available, otherwise null.
     */
    public function getResultId(): ?string
    {
        return $this->data['result_id'] ?? null;
    }

    /**
     * Retrieves the user that chose the result.
     * 
     * @return User|null The user if available, otherwise null.
     */
    public function getFrom(): ?User
    {
        return isset($this->data['from']) ? new User($this->data['from']) : null;
    }

    /**
     * Retrieves the sender location, only for bots that require user location.
     * 
     * @return Location|null The location if available, otherwise null.
     */
    public function getLocation(): ?Location
    {
        return isset($this->data['location']) ? new Location($this->data['location']) : null;
    }

    /**
     * Retrieves the identifier of the sent inline message.
     * Available only if there is an inline keyboard attached to the message.
     * 
     * @return string|null The inline message id if available, otherwise null.
     */
    public function getInlineMessageId(): ?string
    {
        return $this->data['inline_message_id'] ?? null;
    }

    /**
     * Retrieves the query that was used to obtain the result.
     * 
     * @return string|null The query if available, otherwise null.
     */
    public function getQuery(): ?string
    {
        return $this->data['query'] ?? null;
    }
}