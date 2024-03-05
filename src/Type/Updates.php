<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Constant\ApiMethod;
use Ispahbod\BotFather\Constant\WebhookType;
use Ispahbod\BotFather\Field\GetUpdatesField;
use Ispahbod\BotFather\Http\Http;
use Ispahbod\BotFather\Trait\TokenConstructor;

class Updates
{
    use TokenConstructor;

    private int $limit = 100;
    private int $timeout = 0;
    private int $offset = 0;
    private bool $json_format = false;
    private array $allowed = [
        WebhookType::MESSAGE,
        WebhookType::EDITED_CHANNEL_POST,
        WebhookType::CALLBACK_QUERY
    ];

    private function getUpdates(): array
    {
        $updates = Http::Request($this->token, ApiMethod::GET_UPDATES, [
            GetUpdatesField::OFFSET => $this->offset,
            GetUpdatesField::TIMEOUT => $this->timeout,
            GetUpdatesField::LIMIT => $this->limit,
            GetUpdatesField::ALLOWED_UPDATES => $this->allowed,
        ]);
        if ($updates->IsSuccess()) {
            return $updates->GetContent();
        } else {
            return [];
        }
    }

    private function output(array $data): Message|array|string
    {
        if (empty($data)) {
            return $this->json_format ? '' : [];
        }
        if ($this->limit === 1) {
            if ($this->json_format) {
                return json_encode($data[0]);
            }
            return new Message($data[0]['message']);
        }
        if ($this->json_format) {
            return json_encode($data);
        }
        return array_map(
            fn($item) => new Message($item['message']),
            $data
        );
    }

    public function SetLimit($limit): Updates
    {
        $this->limit = $limit;
        return $this;
    }

    public function SetJsonFormat(): Updates
    {
        $this->json_format = true;
        return $this;
    }

    public function SetOffset($offset): Updates
    {
        $this->offset = $offset;
        return $this;
    }

    public function SetTimeout($timeout): Updates
    {
        $this->timeout = $timeout;
        return $this;
    }

    public function SetAllowed(...$allowed): Updates
    {
        $this->allowed = array_merge($allowed, $this->allowed);
        return $this;
    }

    public function GetFirstMessage(): Message|array|string
    {
        $updates = $this->SetOffset(1)->SetLimit(1)->getUpdates();
        return $this->output($updates);
    }

    public function GetLastMessage(): Message|array|string
    {
        $updates = $this->SetOffset(-1)->SetLimit(1)->getUpdates();
        return $this->output($updates);
    }

    public function GetLastMessageJson(): string
    {
        return $this->SetJsonFormat()->GetLastMessage();
    }

    public function GetFirstMessageJson(): string
    {
        return $this->SetJsonFormat()->GetFirstMessage();
    }

    public function GetAllMessages(): Message|array|string
    {
        $updates = $this->SetOffset(0)->SetLimit(100)->getUpdates();
        return $this->output($updates);

    }

    public function GetMessages(): Message|array
    {
        $updates = $this->output($this->getUpdates());
        return $this->output($updates);
    }
}
