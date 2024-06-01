<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\ContentType;
use Ispahbod\BotFather\Trait\DataConstructor;

class PreCheckoutQuery
{
    use DataConstructor;
    use ContentType;

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
     * Retrieves the three-letter ISO 4217 currency code.
     * 
     * @return string|null The currency code if available, otherwise null.
     */
    public function getCurrency(): ?string
    {
        return $this->data['currency'] ?? null;
    }

    /**
     * Retrieves the total price in the smallest units of the currency.
     * 
     * @return int|null The total amount if available, otherwise null.
     */
    public function getTotalAmount(): ?int
    {
        return $this->data['total_amount'] ?? null;
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
     * Retrieves the identifier of the shipping option chosen by the user.
     * 
     * @return string|null The shipping option id if available, otherwise null.
     */
    public function getShippingOptionId(): ?string
    {
        return $this->data['shipping_option_id'] ?? null;
    }

    /**
     * Retrieves the order information provided by the user.
     * 
     * @return OrderInfo|null The order info if available, otherwise null.
     */
    public function getOrderInfo(): ?OrderInfo
    {
        return isset($this->data['order_info']) ? new OrderInfo($this->data['order_info']) : null;
    }
}