<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\CommonDataMethod;
use Ispahbod\BotFather\Trait\DataConstructor;

class User
{
    use DataConstructor;
    use CommonDataMethod;

    public function GetId(): ?int
    {
        return $this->data['id'] ?? null;
    }

    public function GetIsBot(): ?bool
    {
        return $this->data['is_bot'] ?? null;
    }

    public function GetFirstName(): ?string
    {
        return $this->data['first_name'] ?? null;
    }

    public function GetLastName(): ?string
    {
        return $this->data['last_name'] ?? null;
    }

    public function GetUsername(): ?string
    {
        return $this->data['username'] ?? null;
    }

    public function GetLanguageCode(): ?string
    {
        return $this->data['language_code'] ?? null;
    }

    public function GetIsPremium(): ?bool
    {
        return $this->data['is_premium'] ?? null;
    }

    public function GetAddedToAttachmentMenu(): ?bool
    {
        return $this->data['added_to_attachment_menu'] ?? null;
    }

    public function GetCanJoinGroups(): ?bool
    {
        return $this->data['can_join_groups'] ?? null;
    }

    public function GetCanReadAllGroupMessages(): ?bool
    {
        return $this->data['can_read_all_group_messages'] ?? null;
    }

    public function GetSupportsInlineQueries(): ?bool
    {
        return $this->data['supports_inline_queries'] ?? null;
    }
}