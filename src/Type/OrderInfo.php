<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class OrderInfo
{
    use DataConstructor;

    /**
     * Retrieves the user's name.
     * 
     * @return string|null The user's name if available, otherwise null.
     */
    public function getName(): ?string
    {
        return $this->data['name'] ?? null;
    }

    /**
     * Retrieves the user's phone number.
     * 
     * @return string|null The user's phone number if available, otherwise null.
     */
    public function getPhoneNumber(): ?string
    {
        return $this->data['phone_number'] ?? null;
    }

    /**
     * Retrieves the user's email.
     * 
     * @return string|null The user's email if available, otherwise null.
     */
    public function getEmail(): ?string
    {
        return $this->data['email'] ?? null;
    }

    /**
     * Retrieves the user's shipping address.
     * 
     * @return ShippingAddress|null The user's shipping address if available, otherwise null.
     */
    public function getShippingAddress(): ?ShippingAddress
    {
        return isset($this->data['shipping_address']) ? new ShippingAddress($this->data['shipping_address']) : null;
    }
}