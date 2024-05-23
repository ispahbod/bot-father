<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class BotCommand
{
    use DataConstructor;
    /**
     * Retrieves the text of the bot command.
     * This text represents the command and must be between 1 and 32 characters.
     * It can contain only lowercase English letters, digits, and underscores.
     *
     * @return string The text of the bot command.
     */
    public function getCommand(): string
    {
        return $this->data['command'];
    }

    /**
     * Retrieves the description of the bot command.
     * This description provides more details about the command and must be between 1 and 256 characters.
     *
     * @return string The description of the bot command.
     */
    public function getDescription(): string
    {
        return $this->data['description'];
    }

}
