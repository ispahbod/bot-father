<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class VideoChatEnded
{
    use DataConstructor;

    /**
     * Retrieves the duration of the video chat in seconds.
     *
     * @return int The duration of the video chat.
     */
    public function getDuration(): int
    {
        return $this->data['duration'];
    }
}
