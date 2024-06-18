<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class MessageOrigin
{
    use DataConstructor;

    /**
     * Retrieves the type of the message origin.
     * @return string The type of the message origin.
     */
    public function getType(): string
    {
        return $this->data['type'];
    }
    public function getOrigin(): MessageOriginChannel|MessageOriginChat|MessageOriginHiddenUser|MessageOriginUser
    {
        return match ($this->getType()){
            'channel'=>new MessageOriginChannel($this->data),
            'chat'=>new MessageOriginChat($this->data),
            'hidden_user'=>new MessageOriginHiddenUser($this->data),
            'user'=>new MessageOriginUser($this->data),
        };
    }
}