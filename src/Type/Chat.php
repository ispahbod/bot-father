<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class Chat
{
    use DataConstructor;

    public function GetId(): ?int
    {
        return $this->data['id'] ?? null;
    }

    public function GetType(): ?string
    {
        return $this->data['type'] ?? null;
    }

    public function GetTitle(): ?string
    {
        return $this->data['title'] ?? null;
    }

    public function GetUsername(): ?string
    {
        return $this->data['username'] ?? null;
    }

    public function GetFirstName(): ?string
    {
        return $this->data['first_name'] ?? null;
    }

    public function GetLastName(): ?string
    {
        return $this->data['last_name'] ?? null;
    }

    public function GetIsForum(): ?bool
    {
        return $this->data['is_forum'] ?? null;
    }

    public function GetPhoto(): ChatPhoto
    {
        return new ChatPhoto($this->data['photo'] ?? []);
    }

    public function GetActiveUsernames(): ?array
    {
        return $this->data['active_usernames'] ?? null;
    }

    public function GetAvailableReactions(): ?array
    {
        return $this->data['available_reactions'] ?? null;
    }

    public function GetAccentColorId(): ?int
    {
        return $this->data['accent_color_id'] ?? null;
    }

    public function GetBackgroundCustomEmojiId(): ?string
    {
        return $this->data['background_custom_emoji_id'] ?? null;
    }

    public function GetProfileAccentColorId(): ?int
    {
        return $this->data['profile_accent_color_id'] ?? null;
    }

    public function GetProfileBackgroundCustomEmojiId(): ?string
    {
        return $this->data['profile_background_custom_emoji_id'] ?? null;
    }

    public function GetEmojiStatusCustomEmojiId(): ?string
    {
        return $this->data['emoji_status_custom_emoji_id'] ?? null;
    }

    public function GetEmojiStatusExpirationDate(): ?int
    {
        return $this->data['emoji_status_expiration_date'] ?? null;
    }

    public function GetBio(): ?string
    {
        return $this->data['bio'] ?? null;
    }

    public function GetHasPrivateForwards(): ?bool
    {
        return $this->data['has_private_forwards'] ?? null;
    }

    public function GetHasRestrictedVoiceAndVideoMessages(): ?bool
    {
        return $this->data['has_restricted_voice_and_video_messages'] ?? null;
    }

    public function GetJoinToSendMessages(): ?bool
    {
        return $this->data['join_to_send_messages'] ?? null;
    }

    public function GetJoinByRequest(): ?bool
    {
        return $this->data['join_by_request'] ?? null;
    }

    public function GetDescription(): ?string
    {
        return $this->data['description'] ?? null;
    }

    public function GetInviteLink(): ?string
    {
        return $this->data['invite_link'] ?? null;
    }

    public function GetPinnedMessage(): Message
    {
        return new Message($this->data['pinned_message'] ?? []);
    }

    public function GetPermissions(): ?array
    {
        return $this->data['permissions'] ?? null;
    }

    public function GetSlowModeDelay(): ?int
    {
        return $this->data['slow_mode_delay'] ?? null;
    }

    public function GetMessageAutoDeleteTime(): ?int
    {
        return $this->data['message_auto_delete_time'] ?? null;
    }

    public function GetHasAggressiveAntiSpamEnabled(): ?bool
    {
        return $this->data['has_aggressive_anti_spam_enabled'] ?? null;
    }

    public function GetHasHiddenMembers(): ?bool
    {
        return $this->data['has_hidden_members'] ?? null;
    }

    public function GetHasProtectedContent(): ?bool
    {
        return $this->data['has_protected_content'] ?? null;
    }

    public function GetHasVisibleHistory(): ?bool
    {
        return $this->data['has_visible_history'] ?? null;
    }

    public function GetStickerSetName(): ?string
    {
        return $this->data['sticker_set_name'] ?? null;
    }

    public function GetCanSetStickerSet(): ?bool
    {
        return $this->data['can_set_sticker_set'] ?? null;
    }

    public function GetLinkedChatId(): ?int
    {
        return $this->data['linked_chat_id'] ?? null;
    }

    public function GetLocation(): ChatLocation
    {
        return new ChatLocation($this->data['location'] ?? []);
    }

}