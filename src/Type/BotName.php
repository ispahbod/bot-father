<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class BotName
{
    use DataConstructor;

    /**
     * Retrieves the name of the bot.
     *
     * @return string The bot's name.
     */
    public function getName(): string
    {
        return $this->data['name'];
    }
}
