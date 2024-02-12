<?php

namespace LaravelBot\BotFather\Type;

use LaravelBot\BotFather\Trait\DataConstructor;

class Callback
{
    use DataConstructor;

    public function GetId(): ?int
    {
        return $this->data['message_id'] ?? null;
    }

    public function GetInlineMessageId(): ?string
    {
        return $this->data['inline_message_id'] ?? null;
    }

    public function GetChatInstance(): ?string
    {
        return $this->data['chat_instance'] ?? null;
    }

    public function GetData(): ?string
    {
        return $this->data['data'] ?? null;
    }

    public function GetGameShortName(): ?string
    {
        return $this->data['game_short_name'] ?? null;
    }

    public function GetFrom(): User
    {
        return new User($this->data['from'] ?? []);
    }

    public function GetMessage(): Message
    {
        return new Message($this->data['message'] ?? []);
    }
}
