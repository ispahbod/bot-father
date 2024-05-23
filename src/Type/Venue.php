<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class Venue
{
    use DataConstructor;
    
    /**
     * Retrieves the location of the venue.
     * This location cannot be a live location.
     *
     * @return Location|null The location of the venue if available, or null otherwise.
     */
    public function getLocation(): ?Location
    {
        return isset($this->data['location']) ? new Location($this->data['location']) : null;
    }

    /**
     * Retrieves the name of the venue.
     *
     * @return string The name of the venue.
     */
    public function getTitle(): string
    {
        return $this->data['title'];
    }

    /**
     * Retrieves the address of the venue.
     *
     * @return string The address of the venue.
     */
    public function getAddress(): string
    {
        return $this->data['address'];
    }

    /**
     * Retrieves the optional Foursquare identifier of the venue.
     *
     * @return string|null The Foursquare identifier if available, or null otherwise.
     */
    public function getFoursquareId(): ?string
    {
        return $this->data['foursquare_id'] ?? null;
    }

    /**
     * Retrieves the optional Foursquare type of the venue.
     * Example types include "arts_entertainment/default", "arts_entertainment/aquarium", or "food/icecream".
     *
     * @return string|null The Foursquare type if available, or null otherwise.
     */
    public function getFoursquareType(): ?string
    {
        return $this->data['foursquare_type'] ?? null;
    }

    /**
     * Retrieves the optional Google Places identifier of the venue.
     *
     * @return string|null The Google Places identifier if available, or null otherwise.
     */
    public function getGooglePlaceId(): ?string
    {
        return $this->data['google_place_id'] ?? null;
    }

    /**
     * Retrieves the optional Google Places type of the venue.
     * Refer to supported types documentation for more details.
     *
     * @return string|null The Google Places type if available, or null otherwise.
     */
    public function getGooglePlaceType(): ?string
    {
        return $this->data['google_place_type'] ?? null;
    }
}
