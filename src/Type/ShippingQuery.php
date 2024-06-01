<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class ShippingQuery
{
    use DataConstructor;

    /**
     * Retrieves the unique query identifier.
     * 
     * @return string|null The unique query identifier if available, otherwise null.
     */
    public function getId(): ?string
    {
        return $this->data['id'] ?? null;
    }

    /**
     * Retrieves the user who sent the query.
     * 
     * @return User|null The user if available, otherwise null.
     */
    public function getFrom(): ?User
    {
        return isset($this->data['from']) ? new User($this->data['from']) : null;
    }

    /**
     * Retrieves the bot specified invoice payload.
     * 
     * @return string|null The invoice payload if available, otherwise null.
     */
    public function getInvoicePayload(): ?string
    {
        return $this->data['invoice_payload'] ?? null;
    }

    /**
     * Retrieves the user specified shipping address.
     * 
     * @return ShippingAddress|null The shipping address if available, otherwise null.
     */
    public function getShippingAddress(): ?ShippingAddress
    {
        return isset($this->data['shipping_address']) ? new ShippingAddress($this->data['shipping_address']) : null;
    }
}