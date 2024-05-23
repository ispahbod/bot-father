<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class BotShortDescription
{
    use DataConstructor;

    /**
     * Retrieves the short description of the bot.
     *
     * @return string The bot's short description.
     */
    public function getShortDescription(): string
    {
        return $this->data['short_description'];
    }
}
