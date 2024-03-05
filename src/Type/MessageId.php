<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class MessageId
{
    use DataConstructor;

    public function GetMessagesIds(): array
    {
        return array_column($this->data, 'message_id');
    }

    public function GetMessagesJson(): string
    {
        return json_encode($this->GetMessagesIds());
    }

    public function GetMessageCount(): int
    {
        return count($this->data);
    }
}
