<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class Location
{
    use DataConstructor;

    /**
     * Retrieves the latitude of the location.
     *
     * @return float The latitude as defined by the sender.
     */
    public function getLatitude(): float
    {
        return $this->data['latitude'];
    }

    /**
     * Retrieves the longitude of the location.
     *
     * @return float The longitude as defined by the sender.
     */
    public function getLongitude(): float
    {
        return $this->data['longitude'];
    }

    /**
     * Retrieves the horizontal accuracy of the location.
     * This is optional and represents the radius of uncertainty for the location, measured in meters.
     *
     * @return float|null The horizontal accuracy if available, or null otherwise.
     */
    public function getHorizontalAccuracy(): ?float
    {
        return $this->data['horizontal_accuracy'] ?? null;
    }

    /**
     * Retrieves the live period of the location.
     * This is optional and only applicable for active live locations.
     *
     * @return int|null The live period in seconds if available, or null otherwise.
     */
    public function getLivePeriod(): ?int
    {
        return $this->data['live_period'] ?? null;
    }

    /**
     * Retrieves the heading of the location.
     * This is optional and only applicable for active live locations.
     *
     * @return int|null The heading in degrees if available, or null otherwise.
     */
    public function getHeading(): ?int
    {
        return $this->data['heading'] ?? null;
    }

    /**
     * Retrieves the proximity alert radius of the location.
     * This is optional and only applicable for sent live locations.
     *
     * @return int|null The proximity alert radius in meters if available, or null otherwise.
     */
    public function getProximityAlertRadius(): ?int
    {
        return $this->data['proximity_alert_radius'] ?? null;
    }
}
