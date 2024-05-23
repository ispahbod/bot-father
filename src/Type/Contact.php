<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class Contact
{
    use DataConstructor;
    /**
     * Retrieves the contact's phone number.
     *
     * @return string The contact's phone number.
     */
    public function getPhoneNumber(): string
    {
        return $this->data['phone_number'];
    }

    /**
     * Retrieves the contact's first name.
     *
     * @return string The contact's first name.
     */
    public function getFirstName(): string
    {
        return $this->data['first_name'];
    }

    /**
     * Retrieves the contact's last name, if available.
     *
     * @return string|null The contact's last name or null if not available.
     */
    public function getLastName(): ?string
    {
        return $this->data['last_name'] ?? null;
    }

    /**
     * Retrieves the contact's user identifier in Telegram, if available.
     * This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it.
     * However, it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @return int|null The contact's user identifier or null if not available.
     */
    public function getUserId(): ?int
    {
        return $this->data['user_id'] ?? null;
    }

    /**
     * Retrieves additional data about the contact in the form of a vCard, if available.
     *
     * @return string|null The contact's vCard or null if not available.
     */
    public function getVcard(): ?string
    {
        return $this->data['vcard'] ?? null;
    }
}
