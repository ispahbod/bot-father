<?php

namespace Ispahbod\BotFather\Class;

use Ispahbod\BotFather\Constant\ApiMethod;
use Ispahbod\BotFather\Http\Http;
use Ispahbod\BotFather\Trait\TokenConstructor;
use Ispahbod\BotFather\Type\WebhookInfo;

class Webhook
{
    use TokenConstructor;

    public function LogOut(): bool
    {
        $response = Http::Request($this->token, ApiMethod::LOG_OUT);
        return $response->IsSuccess();

    }

    public function Close(): bool
    {
        $response = Http::Request($this->token, ApiMethod::CLOSE);
        return $response->IsSuccess();

    }

    public function SetWebhook($data)
    {
        $response = Http::Request($this->token, ApiMethod::SET_WEBHOOK, $data);
        return $response;

    }

    public function DeleteWebhook($data = []): bool
    {
        $response = Http::Request($this->token, ApiMethod::DELETE_WEBHOOK, $data);
        return $response->IsSuccess();
    }

    public function GetWebhookInfo(): WebhookInfo|false
    {
        $response = Http::Request($this->token, ApiMethod::GET_WEBHOOK_INFO);
        if ($response->IsSuccess()) {
            return new WebhookInfo($response->GetContent());
        }
        return false;
    }
}
