<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class BotDescription
{
    use DataConstructor;

    /**
     * Retrieves the description of the bot.
     *
     * @return string The bot's description.
     */
    public function getDescription(): string
    {
        return $this->data['description'];
    }
}
