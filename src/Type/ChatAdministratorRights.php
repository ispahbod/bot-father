<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class ChatAdministratorRights
{
    use DataConstructor;

    /**
     * Checks if the user's presence in the chat is hidden.
     *
     * @return bool True if the user's presence is hidden, otherwise false.
     */
    public function isAnonymous(): bool
    {
        return $this->data['is_anonymous'] ?? false;
    }

    /**
     * Checks if the administrator can manage the chat.
     *
     * @return bool True if the administrator can manage the chat, otherwise false.
     */
    public function canManageChat(): bool
    {
        return $this->data['can_manage_chat'] ?? false;
    }

    /**
     * Checks if the administrator can delete messages of other users.
     *
     * @return bool True if the administrator can delete messages, otherwise false.
     */
    public function canDeleteMessages(): bool
    {
        return $this->data['can_delete_messages'] ?? false;
    }

    /**
     * Checks if the administrator can manage video chats.
     *
     * @return bool True if the administrator can manage video chats, otherwise false.
     */
    public function canManageVideoChats(): bool
    {
        return $this->data['can_manage_video_chats'] ?? false;
    }

    /**
     * Checks if the administrator can restrict, ban or unban chat members.
     *
     * @return bool True if the administrator can restrict members, otherwise false.
     */
    public function canRestrictMembers(): bool
    {
        return $this->data['can_restrict_members'] ?? false;
    }

    /**
     * Checks if the administrator can promote or demote other administrators.
     *
     * @return bool True if the administrator can promote members, otherwise false.
     */
    public function canPromoteMembers(): bool
    {
        return $this->data['can_promote_members'] ?? false;
    }

    /**
     * Checks if the user can change chat settings like title and photo.
     *
     * @return bool True if the user can change info, otherwise false.
     */
    public function canChangeInfo(): bool
    {
        return $this->data['can_change_info'] ?? false;
    }

    /**
     * Checks if the user can invite new users to the chat.
     *
     * @return bool True if the user can invite users, otherwise false.
     */
    public function canInviteUsers(): bool
    {
        return $this->data['can_invite_users'] ?? false;
    }

    /**
     * Checks if the administrator can post stories to the chat.
     *
     * @return bool True if the administrator can post stories, otherwise false.
     */
    public function canPostStories(): bool
    {
        return $this->data['can_post_stories'] ?? false;
    }

    /**
     * Checks if the administrator can edit stories posted by other users.
     *
     * @return bool True if the administrator can edit stories, otherwise false.
     */
    public function canEditStories(): bool
    {
        return $this->data['can_edit_stories'] ?? false;
    }

    /**
     * Checks if the administrator can delete stories posted by other users.
     *
     * @return bool True if the administrator can delete stories, otherwise false.
     */
    public function canDeleteStories(): bool
    {
        return $this->data['can_delete_stories'] ?? false;
    }

    /**
     * Checks if the administrator can post messages in the channel.
     *
     * @return bool|null True if the administrator can post messages, otherwise false or null if not applicable.
     */
    public function canPostMessages(): ?bool
    {
        return $this->data['can_post_messages'] ?? null;
    }

    /**
     * Checks if the administrator can edit messages of other users and can pin messages.
     *
     * @return bool|null True if the administrator can edit messages, otherwise false or null if not applicable.
     */
    public function canEditMessages(): ?bool
    {
        return $this->data['can_edit_messages'] ?? null;
    }

    /**
     * Checks if the user is allowed to pin messages.
     *
     * @return bool|null True if the user can pin messages, otherwise false or null if not applicable.
     */
    public function canPinMessages(): ?bool
    {
        return $this->data['can_pin_messages'] ?? null;
    }

    /**
     * Checks if the user is allowed to manage topics in the chat.
     *
     * @return bool|null True if the user can manage topics, otherwise false or null if not applicable.
     */
    public function canManageTopics(): ?bool
    {
        return $this->data['can_manage_topics'] ?? null;
    }
}
