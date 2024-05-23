<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class ChatBackground
{
    use DataConstructor;
    /**
     * Retrieves the type of the background.
     * 
     * @return BackgroundType Type of the background.
     */
    public function getType(): BackgroundType
    {
        return new BackgroundType($this->data['type']);
    }
}