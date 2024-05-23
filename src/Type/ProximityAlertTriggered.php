<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class ProximityAlertTriggered
{
    use DataConstructor;
    /**
     * Retrieves the user that triggered the alert.
     *
     * @return User The user that triggered the alert.
     */
    public function getTraveler(): User
    {
        return new User($this->data['traveler']);
    }

    /**
     * Retrieves the user that set the alert.
     *
     * @return User The user that set the alert.
     */
    public function getWatcher(): User
    {
        return new User($this->data['watcher']);
    }

    /**
     * Retrieves the distance between the traveler and the watcher.
     *
     * @return int The distance between the users in meters.
     */
    public function getDistance(): int
    {
        return $this->data['distance'];
    }
}
