<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class InlineQuery
{
    use DataConstructor;

    /**
     * Retrieves the unique identifier for this inline query.
     * 
     * @return string|null The unique identifier if available, otherwise null.
     */
    public function getId(): ?string
    {
        return $this->data['id'] ?? null;
    }

    /**
     * Retrieves the user who sent the inline query.
     * 
     * @return User|null The user if available, otherwise null.
     */
    public function getFrom(): ?User
    {
        return isset($this->data['from']) ? new User($this->data['from']) : null;
    }

    /**
     * Retrieves the text of the query.
     * 
     * @return string|null The text of the query if available, otherwise null.
     */
    public function getQuery(): ?string
    {
        return $this->data['query'] ?? null;
    }

    /**
     * Retrieves the offset of the results to be returned.
     * 
     * @return string|null The offset if available, otherwise null.
     */
    public function getOffset(): ?string
    {
        return $this->data['offset'] ?? null;
    }

    /**
     * Retrieves the type of the chat from which the inline query was sent.
     * 
     * @return string|null The chat type if available, otherwise null.
     */
    public function getChatType(): ?string
    {
        return $this->data['chat_type'] ?? null;
    }

    /**
     * Retrieves the location of the sender.
     * 
     * @return Location|null The location if available, otherwise null.
     */
    public function getLocation(): ?Location
    {
        return isset($this->data['location']) ? new Location($this->data['location']) : null;
    }
}