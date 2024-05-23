<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class ChatInviteLink
{
    use DataConstructor;

    /**
     * Retrieves the invite link.
     *
     * @return string The invite link.
     */
    public function getInviteLink(): string
    {
        return $this->data['invite_link'];
    }

    /**
     * Retrieves the creator of the link.
     *
     * @return User The creator of the link.
     */
    public function getCreator(): User
    {
        return new User($this->data['creator']);
    }

    /**
     * Checks if users joining the chat via the link need to be approved by chat administrators.
     *
     * @return bool True if approval is needed, otherwise false.
     */
    public function createsJoinRequest(): bool
    {
        return $this->data['creates_join_request'] ?? false;
    }

    /**
     * Checks if the link is the primary invite link.
     *
     * @return bool True if the link is primary, otherwise false.
     */
    public function isPrimary(): bool
    {
        return $this->data['is_primary'] ?? false;
    }

    /**
     * Checks if the link is revoked.
     *
     * @return bool True if the link is revoked, otherwise false.
     */
    public function isRevoked(): bool
    {
        return $this->data['is_revoked'] ?? false;
    }

    /**
     * Retrieves the name of the invite link.
     *
     * @return string|null The name of the invite link, or null if not available.
     */
    public function getName(): ?string
    {
        return $this->data['name'] ?? null;
    }

    /**
     * Retrieves the expiration date of the invite link as a Unix timestamp.
     *
     * @return int|null The expiration date, or null if not available.
     */
    public function getExpireDate(): ?int
    {
        return $this->data['expire_date'] ?? null;
    }

    /**
     * Retrieves the maximum number of users that can join the chat via this invite link.
     *
     * @return int|null The member limit, or null if not available.
     */
    public function getMemberLimit(): ?int
    {
        return $this->data['member_limit'] ?? null;
    }

    /**
     * Retrieves the number of pending join requests created using this link.
     *
     * @return int|null The count of pending join requests, or null if not available.
     */
    public function getPendingJoinRequestCount(): ?int
    {
        return $this->data['pending_join_request_count'] ?? null;
    }

}
