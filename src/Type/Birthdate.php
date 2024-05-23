<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class Birthdate
{
    use DataConstructor;

    /**
     * Retrieves the day of the user's birth.
     *
     * @return int The day of the user's birth.
     */
    public function getDay(): int
    {
        return $this->data['day'];
    }

    /**
     * Retrieves the month of the user's birth.
     *
     * @return int The month of the user's birth.
     */
    public function getMonth(): int
    {
        return $this->data['month'];
    }

    /**
     * Retrieves the year of the user's birth if available.
     *
     * @return int|null The year of the user's birth, or null if not available.
     */
    public function getYear(): ?int
    {
        return $this->data['year'] ?? null;
    }

}