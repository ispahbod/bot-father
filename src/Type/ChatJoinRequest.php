<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class ChatJoinRequest
{
    use DataConstructor;

    /**
     * Retrieves the chat to which the request was sent.
     *
     * @return Chat The chat object.
     */
    public function getChat(): Chat
    {
        return new Chat($this->data['chat']);
    }

    /**
     * Retrieves the user that sent the join request.
     *
     * @return User The user object.
     */
    public function getFrom(): User
    {
        return new User($this->data['from']);
    }

    /**
     * Retrieves the identifier of a private chat with the user who sent the join request.
     *
     * @return int The identifier of the private chat.
     */
    public function getUserChatId(): int
    {
        return $this->data['user_chat_id'];
    }

    /**
     * Retrieves the date the request was sent in Unix time.
     *
     * @return int The date the request was sent.
     */
    public function getDate(): int
    {
        return $this->data['date'];
    }

    /**
     * Retrieves the bio of the user, if available.
     *
     * @return string|null The bio of the user or null if not available.
     */
    public function getBio(): ?string
    {
        return $this->data['bio'] ?? null;
    }

    /**
     * Retrieves the chat invite link that was used by the user to send the join request, if available.
     *
     * @return ChatInviteLink|null The chat invite link or null if not available.
     */
    public function getInviteLink(): ?ChatInviteLink
    {
        return isset($this->data['invite_link']) ? new ChatInviteLink($this->data['invite_link']) : null;
    }
}