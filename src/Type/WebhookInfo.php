<?php

namespace LaravelBot\BotFather\Type;

use LaravelBot\BotFather\Trait\DataConstructor;

class WebhookInfo
{
    use DataConstructor;

    public function GetUrl(): ?string
    {
        return $this->data['url'] ?? null;
    }

    public function GetHasCustomCertificate(): ?bool
    {
        return $this->data['has_custom_certificate'] ?? null;
    }

    public function GetPendingUpdateCount(): ?int
    {
        return $this->data['pending_update_count'] ?? null;
    }

    public function GetIpAddress(): ?string
    {
        return $this->data['ip_address'] ?? null;
    }

    public function GetLastErrorDate(): ?int
    {
        return $this->data['last_error_date'] ?? null;
    }

    public function GetLastErrorMessage(): ?string
    {
        return $this->data['last_error_message'] ?? null;
    }

    public function GetLastSynchronizationErrorDate(): ?int
    {
        return $this->data['last_synchronization_error_date'] ?? null;
    }

    public function GetMaxConnections(): ?int
    {
        return $this->data['max_connections'] ?? null;
    }

    public function GetAllowedUpdates(): ?array
    {
        return $this->data['allowed_updates'] ?? null;
    }
}