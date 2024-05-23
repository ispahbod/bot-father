<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class VideoChatScheduled
{
    use DataConstructor;
    /**
     * Retrieves the Unix timestamp when the video chat is scheduled to start by a chat administrator.
     *
     * @return int Unix timestamp of the scheduled start time.
     */
    public function getStartDate(): int
    {
        return $this->data['start_date'];
    }
}
