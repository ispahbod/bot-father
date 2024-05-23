<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class ChatMemberRestricted
{
    use DataConstructor;

    /**
     * Retrieves the member's status in the chat.
     *
     * @return string The member's status, always "restricted".
     */
    public function getStatus(): string
    {
        return $this->data['status'];
    }

    /**
     * Retrieves information about the user.
     *
     * @return User Information about the user.
     */
    public function getUser(): User
    {
        return new User($this->data['user']);
    }

    /**
     * Checks if the user is a member of the chat at the moment of the request.
     *
     * @return bool True if the user is a member, otherwise false.
     */
    public function isMember(): bool
    {
        return $this->data['is_member'] ?? false;
    }

    /**
     * Checks if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations, and venues.
     *
     * @return bool True if allowed, otherwise false.
     */
    public function canSendMessages(): bool
    {
        return $this->data['can_send_messages'] ?? false;
    }

    /**
     * Checks if the user is allowed to send audios.
     *
     * @return bool True if allowed, otherwise false.
     */
    public function canSendAudios(): bool
    {
        return $this->data['can_send_audios'] ?? false;
    }

    /**
     * Checks if the user is allowed to send documents.
     *
     * @return bool True if allowed, otherwise false.
     */
    public function canSendDocuments(): bool
    {
        return $this->data['can_send_documents'] ?? false;
    }

    /**
     * Checks if the user is allowed to send photos.
     *
     * @return bool True if allowed, otherwise false.
     */
    public function canSendPhotos(): bool
    {
        return $this->data['can_send_photos'] ?? false;
    }

    /**
     * Checks if the user is allowed to send videos.
     *
     * @return bool True if allowed, otherwise false.
     */
    public function canSendVideos(): bool
    {
        return $this->data['can_send_videos'] ?? false;
    }

    /**
     * Checks if the user is allowed to send video notes.
     *
     * @return bool True if allowed, otherwise false.
     */
    public function canSendVideoNotes(): bool
    {
        return $this->data['can_send_video_notes'] ?? false;
    }

    /**
     * Checks if the user is allowed to send voice notes.
     *
     * @return bool True if allowed, otherwise false.
     */
    public function canSendVoiceNotes(): bool
    {
        return $this->data['can_send_voice_notes'] ?? false;
    }

    /**
     * Checks if the user is allowed to send polls.
     *
     * @return bool True if allowed, otherwise false.
     */
    public function canSendPolls(): bool
    {
        return $this->data['can_send_polls'] ?? false;
    }

    /**
     * Checks if the user is allowed to send animations, games, stickers, and use inline bots.
     *
     * @return bool True if allowed, otherwise false.
     */
    public function canSendOtherMessages(): bool
    {
        return $this->data['can_send_other_messages'] ?? false;
    }

    /**
     * Checks if the user is allowed to add web page previews to their messages.
     *
     * @return bool True if allowed, otherwise false.
     */
    public function canAddWebPagePreviews(): bool
    {
        return $this->data['can_add_web_page_previews'] ?? false;
    }

    /**
     * Checks if the user is allowed to change the chat title, photo, and other settings.
     *
     * @return bool True if allowed, otherwise false.
     */
    public function canChangeInfo(): bool
    {
        return $this->data['can_change_info'] ?? false;
    }

    /**
     * Checks if the user is allowed to invite new users to the chat.
     *
     * @return bool True if allowed, otherwise false.
     */
    public function canInviteUsers(): bool
    {
        return $this->data['can_invite_users'] ?? false;
    }

    /**
     * Checks if the user is allowed to pin messages.
     *
     * @return bool True if allowed, otherwise false.
     */
    public function canPinMessages(): bool
    {
        return $this->data['can_pin_messages'] ?? false;
    }

    /**
     * Checks if the user is allowed to create forum topics.
     *
     * @return bool True if allowed, otherwise false.
     */
    public function canManageTopics(): bool
    {
        return $this->data['can_manage_topics'] ?? false;
    }

    /**
     * Retrieves the date when restrictions will be lifted for this user.
     *
     * @return int|null Date as Unix time, or null if the user is restricted forever.
     */
    public function getUntilDate(): ?int
    {
        return $this->data['until_date'] ?? null;
    }
}