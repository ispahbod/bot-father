<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Constant\ChatMemberStatus;
use Ispahbod\BotFather\Trait\DataConstructor;

class ChatMember
{
    use DataConstructor;

    public function GetStatus(): string|false
    {
        return $this->data['status'] ?? false;
    }

    public function IsMembership(): bool
    {
        return in_array($this->GetStatus(), [ChatMemberStatus::MEMBER, ChatMemberStatus::CREATOR, ChatMemberStatus::ADMINISTRATOR]);
    }

    public function IsMember(): bool
    {
        return $this->GetStatus() == ChatMemberStatus::MEMBER;
    }

    public function IsAdministrator(): bool
    {
        return $this->GetStatus() == ChatMemberStatus::ADMINISTRATOR;
    }

    public function IsLeft(): bool
    {
        return $this->GetStatus() == ChatMemberStatus::LEFT;
    }

    public function IsCreator(): bool
    {
        return $this->GetStatus() == ChatMemberStatus::CREATOR;
    }

    public function IsRestricted(): bool
    {
        return $this->GetStatus() == ChatMemberStatus::RESTRICTED;
    }

    public function IsKicked(): bool
    {
        return $this->GetStatus() == ChatMemberStatus::KICKED;
    }

    public function GetUser(): User
    {
        return new User($this->data['user'] ?? []);
    }

    public function GetIsAnonymous(): bool
    {
        return $this->data['is_anonymous'] ?? false;
    }

    public function GetCustomTitle(): string|false
    {
        return $this->data['custom_title'] ?? false;
    }
}
