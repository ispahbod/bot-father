<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class BusinessLocation
{
    use DataConstructor;

    /**
     * Retrieves the address of the business.
     *
     * @return string The address of the business.
     */
    public function getAddress(): string
    {
        return $this->data['address'];
    }

    /**
     * Retrieves the location of the business if available.
     *
     * @return Location|null The location of the business, or null if not available.
     */
    public function getLocation(): ?Location
    {
        return isset($this->data['location']) ? new Location($this->data['location']) : null;
    }
}