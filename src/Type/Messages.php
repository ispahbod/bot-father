<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class Messages
{
    use DataConstructor;

    public function GetMessages(): array
    {
        return array_map(fn($m) => new Message($m), $this->data);
    }
    public function GetMessageCount(): int
    {
        return count($this->data);
    }
    public function GetFirstMessage(): array
    {
        return new Message($this->data[0] ?? []);
    }
    public function GetLastMessage(): array
    {
        return new Message(end($this->data));
    }
    public function GetMessagesIds(): array
    {
        return array_column($this->data, 'message_id');
    }
}
