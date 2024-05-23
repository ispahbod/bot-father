<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class ChatPermissions
{
    use DataConstructor;

    /**
     * Checks if the user is allowed to send text messages and other types of messages.
     *
     * @return bool|null True if allowed, otherwise false or null if not available.
     */
    public function canSendMessages(): ?bool
    {
        return $this->data['can_send_messages'] ?? null;
    }

    /**
     * Checks if the user is allowed to send audios.
     *
     * @return bool|null True if allowed, otherwise false or null if not available.
     */
    public function canSendAudios(): ?bool
    {
        return $this->data['can_send_audios'] ?? null;
    }

    /**
     * Checks if the user is allowed to send documents.
     *
     * @return bool|null True if allowed, otherwise false or null if not available.
     */
    public function canSendDocuments(): ?bool
    {
        return $this->data['can_send_documents'] ?? null;
    }

    /**
     * Checks if the user is allowed to send photos.
     *
     * @return bool|null True if allowed, otherwise false or null if not available.
     */
    public function canSendPhotos(): ?bool
    {
        return $this->data['can_send_photos'] ?? null;
    }

    /**
     * Checks if the user is allowed to send videos.
     *
     * @return bool|null True if allowed, otherwise false or null if not available.
     */
    public function canSendVideos(): ?bool
    {
        return $this->data['can_send_videos'] ?? null;
    }

    /**
     * Checks if the user is allowed to send video notes.
     *
     * @return bool|null True if allowed, otherwise false or null if not available.
     */
    public function canSendVideoNotes(): ?bool
    {
        return $this->data['can_send_video_notes'] ?? null;
    }

    /**
     * Checks if the user is allowed to send voice notes.
     *
     * @return bool|null True if allowed, otherwise false or null if not available.
     */
    public function canSendVoiceNotes(): ?bool
    {
        return $this->data['can_send_voice_notes'] ?? null;
    }

    /**
     * Checks if the user is allowed to send polls.
     *
     * @return bool|null True if allowed, otherwise false or null if not available.
     */
    public function canSendPolls(): ?bool
    {
        return $this->data['can_send_polls'] ?? null;
    }

    /**
     * Checks if the user is allowed to send other types of messages like animations, games, stickers, and use inline bots.
     *
     * @return bool|null True if allowed, otherwise false or null if not available.
     */
    public function canSendOtherMessages(): ?bool
    {
        return $this->data['can_send_other_messages'] ?? null;
    }

    /**
     * Checks if the user is allowed to add web page previews to their messages.
     *
     * @return bool|null True if allowed, otherwise false or null if not available.
     */
    public function canAddWebPagePreviews(): ?bool
    {
        return $this->data['can_add_web_page_previews'] ?? null;
    }

    /**
     * Checks if the user is allowed to change the chat title, photo, and other settings.
     *
     * @return bool|null True if allowed, otherwise false or null if not available.
     */
    public function canChangeInfo(): ?bool
    {
        return $this->data['can_change_info'] ?? null;
    }

    /**
     * Checks if the user is allowed to invite new users to the chat.
     *
     * @return bool|null True if allowed, otherwise false or null if not available.
     */
    public function canInviteUsers(): ?bool
    {
        return $this->data['can_invite_users'] ?? null;
    }

    /**
     * Checks if the user is allowed to pin messages.
     *
     * @return bool|null True if allowed, otherwise false or null if not available.
     */
    public function canPinMessages(): ?bool
    {
        return $this->data['can_pin_messages'] ?? null;
    }

    /**
     * Checks if the user is allowed to create forum topics.
     *
     * @return bool|null True if allowed, otherwise false or null if not available.
     */
    public function canManageTopics(): ?bool
    {
        return $this->data['can_manage_topics'] ?? null;
    }
}