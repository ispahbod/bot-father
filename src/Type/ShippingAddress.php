<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class ShippingAddress
{
    use DataConstructor;

    /**
     * Retrieves the two-letter ISO 3166-1 alpha-2 country code.
     * 
     * @return string|null The country code if available, otherwise null.
     */
    public function getCountryCode(): ?string
    {
        return $this->data['country_code'] ?? null;
    }

    /**
     * Retrieves the state, if applicable.
     * 
     * @return string|null The state if available, otherwise null.
     */
    public function getState(): ?string
    {
        return $this->data['state'] ?? null;
    }

    /**
     * Retrieves the city.
     * 
     * @return string|null The city if available, otherwise null.
     */
    public function getCity(): ?string
    {
        return $this->data['city'] ?? null;
    }

    /**
     * Retrieves the first line of the address.
     * 
     * @return string|null The first line of the address if available, otherwise null.
     */
    public function getStreetLine1(): ?string
    {
        return $this->data['street_line1'] ?? null;
    }

    /**
     * Retrieves the second line of the address.
     * 
     * @return string|null The second line of the address if available, otherwise null.
     */
    public function getStreetLine2(): ?string
    {
        return $this->data['street_line2'] ?? null;
    }

    /**
     * Retrieves the address post code.
     * 
     * @return string|null The post code if available, otherwise null.
     */
    public function getPostCode(): ?string
    {
        return $this->data['post_code'] ?? null;
    }
}