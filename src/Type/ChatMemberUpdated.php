<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class ChatMemberUpdated
{
    use DataConstructor;

    /**
     * Retrieves the chat the user belongs to.
     *
     * @return Chat The chat the user belongs to.
     */
    public function getChat(): Chat
    {
        return new Chat($this->data['chat']);
    }

    /**
     * Retrieves the user who performed the action resulting in the change.
     *
     * @return User The performer of the action.
     */
    public function getFrom(): User
    {
        return new User($this->data['from']);
    }

    /**
     * Retrieves the date the change was done in Unix time.
     *
     * @return int The date the change was done.
     */
    public function getDate(): int
    {
        return $this->data['date'];
    }

    /**
     * Retrieves the previous information about the chat member.
     *
     * @return ChatMember The previous information about the chat member.
     */
    public function getOldChatMember(): ChatMember
    {
        return new ChatMember($this->data['old_chat_member']);
    }

    /**
     * Retrieves the new information about the chat member.
     *
     * @return ChatMember The new information about the chat member.
     */
    public function getNewChatMember(): ChatMember
    {
        return new ChatMember($this->data['new_chat_member']);
    }

    /**
     * Retrieves the chat invite link used by the user to join the chat, if applicable.
     *
     * @return ChatInviteLink|null The chat invite link, or null if not available.
     */
    public function getInviteLink(): ?ChatInviteLink
    {
        return isset($this->data['invite_link']) ? new ChatInviteLink($this->data['invite_link']) : null;
    }

    /**
     * Checks if the user joined the chat after sending a direct join request without using an invite link.
     *
     * @return bool|null True if joined by direct join request, otherwise false or null if not applicable.
     */
    public function isViaJoinRequest(): ?bool
    {
        return $this->data['via_join_request'] ?? null;
    }

    /**
     * Checks if the user joined the chat via a chat folder invite link.
     *
     * @return bool|null True if joined via a chat folder invite link, otherwise false or null if not applicable.
     */
    public function isViaChatFolderInviteLink(): ?bool
    {
        return $this->data['via_chat_folder_invite_link'] ?? null;
    }
}