<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class ChatLocation
{
    use DataConstructor;

    /**
     * Retrieves the location to which the supergroup is connected.
     * This cannot be a live location.
     *
     * @return Location The location to which the supergroup is connected.
     */
    public function getLocation(): Location
    {
        return new Location($this->data['location']);
    }

    /**
     * Retrieves the location address as defined by the chat owner.
     * The address is a string between 1 and 64 characters.
     *
     * @return string The location address.
     */
    public function getAddress(): string
    {
        return $this->data['address'];
    }
}
