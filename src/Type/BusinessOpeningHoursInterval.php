<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class BusinessOpeningHoursInterval
{
    use DataConstructor;

    /**
     * Retrieves the opening minute of the week for the business.
     * This is the minute's sequence number in a week, starting on Monday, marking the start of the time interval during which the business is open.
     *
     * @return int The opening minute of the week.
     */
    public function getOpeningMinute(): int
    {
        return $this->data['opening_minute'];
    }

    /**
     * Retrieves the closing minute of the week for the business.
     * This is the minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open.
     *
     * @return int The closing minute of the week.
     */
    public function getClosingMinute(): int
    {
        return $this->data['closing_minute'];
    }
}