<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class BusinessOpeningHours
{
    use DataConstructor;

    /**
     * Retrieves the unique name of the time zone for which the opening hours are defined.
     *
     * @return string The unique name of the time zone.
     */
    public function getTimeZoneName(): string
    {
        return $this->data['time_zone_name'];
    }

    /**
     * Retrieves the list of time intervals describing business opening hours.
     *
     * @return array An array of BusinessOpeningHoursInterval objects.
     */
    public function getOpeningHours(): array
    {
        return array_map(function ($interval) {
            return new BusinessOpeningHoursInterval($interval);
        }, $this->data['opening_hours']);
    }
}