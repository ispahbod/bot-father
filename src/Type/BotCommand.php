<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class BotCommand
{
    use DataConstructor;

    public function GetCommand(): string
    {
        return $this->data['command'];
    }

    public function GetDescription(): string
    {
        return $this->data['description'];
    }
}
