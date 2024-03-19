<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class User
{
    use DataConstructor;

    public function GetId(): string
    {
        return $this->data['id'] ?? '';
    }

    public function GetIsBot(): bool
    {
        return $this->data['is_bot'] ?? '';
    }

    public function GetFirstName(): string
    {
        return $this->data['first_name'] ?? '';
    }

    public function GetLastName(): string
    {
        return $this->data['last_name'] ?? '';
    }

    public function GetUsername(): string
    {
        return $this->data['username'] ?? '';
    }

    public function GetLanguageCode(): string
    {
        return $this->data['language_code'] ?? '';
    }

    public function GetIsPremium(): bool
    {
        return $this->data['is_premium'] ?? false;
    }

    public function GetAddedToAttachmentMenu(): bool
    {
        return $this->data['added_to_attachment_menu'] ?? false;
    }

    public function GetCanJoinGroups(): bool
    {
        return $this->data['can_join_groups'] ?? false;
    }

    public function GetCanReadAllGroupMessages(): bool
    {
        return $this->data['can_read_all_group_messages'] ?? false;
    }

    public function GetSupportsInlineQueries(): bool
    {
        return $this->data['supports_inline_queries'] ?? false;
    }
}
