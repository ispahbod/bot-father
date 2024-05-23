<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Constant\ChatMemberStatus;
use Ispahbod\BotFather\Trait\DataConstructor;

final class ChatsMember
{
    use DataConstructor;

    public array $chatsMember;

    public function __construct($data)
    {
        $this->data = $data;
        foreach ($this->data as $response) {
            $this->chatsMember[] = new ChatMember($response->GetContent());
        }
    }

    public function IsMembershipToAll(): bool
    {
        $notMembership = false;
        foreach ($this->chatsMember as $response) {
            $membership = $response->IsMembership();
            if (!$membership) {
                $notMembership = true;
            }
        }
        return !$notMembership;
    }

    public function IsNotMembershipToAll(): bool
    {
        return !$this->IsMembership();
    }

    public function GetMembershipToAllCount(): int
    {
        $status = $this->GetAllStatus();
        $count = 0;
        foreach ($status as $item) {
            if (in_array($item, [ChatMemberStatus::MEMBER, ChatMemberStatus::CREATOR, ChatMemberStatus::ADMINISTRATOR])) {
                $count++;
            }
        }
        return $count;
    }

    public function GetNotMembershipToAllCount(): int
    {
        $count = $this->IsMembershipCount();
        $all = $this->GetAllStatusCount();
        return $all - $count;
    }

    public function GetAllStatusCount(): int
    {
        return count($this->chatsMember);
    }

    public function GetAllStatus(): array
    {
        $status = [];
        foreach ($this->chatsMember as $response) {
            $status[] = $response->GetStatus();
        }
        return $status;
    }

    public function GetAllUsers(): array
    {
        $users = [];
        foreach ($this->chatsMember as $response) {
            $users[] = $response->GetUser();
        }
        return $users;
    }

}
