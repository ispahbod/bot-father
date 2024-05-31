<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class ChatFullInfo
{
    use DataConstructor;

    /**
     * Retrieves the unique identifier for this chat.
     * This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @return int The unique identifier for this chat.
     */
    public function getId(): int
    {
        return $this->data['id'] ?? 0;
    }

    /**
     * Retrieves the type of the chat, can be either “private”, “group”, “supergroup” or “channel”.
     *
     * @return string|null The type of the chat.
     */
    public function getType(): ?string
    {
        return $this->data['type'] ?? null;
    }

    /**
     * Retrieves the title of the chat, for supergroups, channels and group chats.
     *
     * @return string|null The title of the chat.
     */
    public function getTitle(): ?string
    {
        return $this->data['title'] ?? null;
    }

    /**
     * Retrieves the username of the chat, for private chats, supergroups and channels if available.
     *
     * @return string|null The username of the chat.
     */
    public function getUsername(): ?string
    {
        return $this->data['username'] ?? null;
    }

    /**
     * Retrieves the first name of the other party in a private chat.
     *
     * @return string|null The first name of the other party.
     */
    public function getFirstName(): ?string
    {
        return $this->data['first_name'] ?? null;
    }

    /**
     * Retrieves the last name of the other party in a private chat.
     *
     * @return string|null The last name of the other party.
     */
    public function getLastName(): ?string
    {
        return $this->data['last_name'] ?? null;
    }

    /**
     * Checks if the supergroup chat is a forum (has topics enabled).
     *
     * @return bool|null True if the supergroup chat is a forum, otherwise null.
     */
    public function getIsForum(): ?bool
    {
        return $this->data['is_forum'] ?? null;
    }

    /**
     * Retrieves the identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link preview.
     *
     * @return int|null The identifier of the accent color.
     */
    public function getAccentColorId(): ?int
    {
        return $this->data['accent_color_id'] ?? null;
    }

    /**
     * Retrieves the maximum number of reactions that can be set on a message in the chat.
     *
     * @return int|null The maximum number of reactions.
     */
    public function getMaxReactionCount(): ?int
    {
        return $this->data['max_reaction_count'] ?? null;
    }

    /**
     * Retrieves the chat photo if available.
     *
     * @return ChatPhoto|null The chat photo.
     */
    public function getPhoto(): ?ChatPhoto
    {
        return isset($this->data['photo']) ? new ChatPhoto($this->data['photo']) : null;
    }

    /**
     * Retrieves the list of all active chat usernames; for private chats, supergroups and channels if non-empty.
     *
     * @return array|null The list of active usernames.
     */
    public function getActiveUsernames(): ?array
    {
        return $this->data['active_usernames'] ?? null;
    }

    /**
     * Retrieves the date of birth of the user for private chats.
     *
     * @return Birthdate|null The date of birth of the user.
     */
    public function getBirthdate(): ?Birthdate
    {
        return isset($this->data['birthdate']) ? new Birthdate($this->data['birthdate']) : null;
    }

    /**
     * Retrieves the intro of the business for private chats with business accounts.
     *
     * @return BusinessIntro|null The business intro.
     */
    public function getBusinessIntro(): ?BusinessIntro
    {
        return isset($this->data['business_intro']) ? new BusinessIntro($this->data['business_intro']) : null;
    }

    /**
     * Retrieves the location of the business for private chats with business accounts.
     *
     * @return BusinessLocation|null The business location.
     */
    public function getBusinessLocation(): ?BusinessLocation
    {
        return isset($this->data['business_location']) ? new BusinessLocation($this->data['business_location']) : null;
    }

    /**
     * Retrieves the opening hours of the business for private chats with business accounts.
     *
     * @return BusinessOpeningHours|null The business opening hours.
     */
    public function getBusinessOpeningHours(): ?BusinessOpeningHours
    {
        return isset($this->data['business_opening_hours']) ? new BusinessOpeningHours($this->data['business_opening_hours']) : null;
    }

    /**
     * Retrieves the personal channel of the user for private chats.
     *
     * @return Chat|null The personal chat.
     */
    public function getPersonalChat(): ?Chat
    {
        return isset($this->data['personal_chat']) ? new Chat($this->data['personal_chat']) : null;
    }

    /**
     * Retrieves the list of available reactions allowed in the chat. If omitted, then all emoji reactions are allowed.
     *
     * @return array|null The list of available reactions.
     */
    public function getAvailableReactions(): ?array
    {
        return $this->data['available_reactions'] ?? null;
    }

    /**
     * Retrieves the custom emoji identifier of the emoji chosen by the chat for the reply header and link preview background.
     *
     * @return string|null The custom emoji identifier.
     */
    public function getBackgroundCustomEmojiId(): ?string
    {
        return $this->data['background_custom_emoji_id'] ?? null;
    }

    /**
     * Retrieves the identifier of the accent color for the chat's profile background.
     *
     * @return int|null The identifier of the profile accent color.
     */
    public function getProfileAccentColorId(): ?int
    {
        return $this->data['profile_accent_color_id'] ?? null;
    }

    /**
     * Retrieves the custom emoji identifier of the emoji chosen by the chat for its profile background.
     *
     * @return string|null The custom emoji identifier.
     */
    public function getProfileBackgroundCustomEmojiId(): ?string
    {
        return $this->data['profile_background_custom_emoji_id'] ?? null;
    }

    /**
     * Retrieves the custom emoji identifier of the emoji status of the chat or the other party in a private chat.
     *
     * @return string|null The custom emoji identifier.
     */
    public function getEmojiStatusCustomEmojiId(): ?string
    {
        return $this->data['emoji_status_custom_emoji_id'] ?? null;
    }

    /**
     * Retrieves the expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any.
     *
     * @return int|null The expiration date of the emoji status.
     */
    public function getEmojiStatusExpirationDate(): ?int
    {
        return $this->data['emoji_status_expiration_date'] ?? null;
    }

    /**
     * Retrieves the bio of the other party in a private chat.
     *
     * @return string|null The bio of the other party.
     */
    public function getBio(): ?string
    {
        return $this->data['bio'] ?? null;
    }

    /**
     * Checks if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user.
     *
     * @return bool|null True if the privacy settings allow, otherwise null.
     */
    public function getHasPrivateForwards(): bool
    {
        return $this->data['has_private_forwards'] ?? false;
    }

    /**
     * Checks if the privacy settings of the other party restrict sending voice and video note messages in the private chat.
     *
     * @return bool|null True if the privacy settings restrict, otherwise null.
     */
    public function getHasRestrictedVoiceAndVideoMessages(): ?bool
    {
        return $this->data['has_restricted_voice_and_video_messages'] ?? null;
    }

    /**
     * Checks if users need to join the supergroup before they can send messages.
     *
     * @return bool|null True if users need to join, otherwise null.
     */
    public function getJoinToSendMessages(): ?bool
    {
        return $this->data['join_to_send_messages'] ?? null;
    }

    /**
     * Checks if all users directly joining the supergroup without using an invite link need to be approved by supergroup administrators.
     *
     * @return bool|null True if approval is needed, otherwise null.
     */
    public function getJoinByRequest(): ?bool
    {
        return $this->data['join_by_request'] ?? null;
    }

    /**
     * Retrieves the description of the chat, for groups, supergroups and channel chats.
     *
     * @return string|null The description of the chat.
     */
    public function getDescription(): ?string
    {
        return $this->data['description'] ?? null;
    }

    /**
     * Retrieves the primary invite link of the chat, for groups, supergroups and channel chats.
     *
     * @return string|null The primary invite link.
     */
    public function getInviteLink(): ?string
    {
        return $this->data['invite_link'] ?? null;
    }

    /**
     * Retrieves the most recent pinned message (by sending date) if available.
     *
     * @return Message|null The most recent pinned message.
     */
    public function getPinnedMessage(): ?Message
    {
        return isset($this->data['pinned_message']) ? new Message($this->data['pinned_message']) : null;
    }

    /**
     * Retrieves the default chat member permissions, for groups and supergroups if available.
     *
     * @return ChatPermissions|null The default chat member permissions.
     */
    public function getPermissions(): ?ChatPermissions
    {
        return isset($this->data['permissions']) ? new ChatPermissions($this->data['permissions']) : null;
    }

    /**
     * Retrieves the minimum allowed delay between consecutive messages sent by each unprivileged user in supergroups; in seconds.
     *
     * @return int|null The slow mode delay in seconds.
     */
    public function getSlowModeDelay(): ?int
    {
        return $this->data['slow_mode_delay'] ?? null;
    }

    /**
     * Retrieves the minimum number of boosts that a non-administrator user needs to add in order to ignore slow mode and chat permissions in supergroups.
     *
     * @return int|null The unrestrict boost count.
     */
    public function getUnrestrictBoostCount(): ?int
    {
        return $this->data['unrestrict_boost_count'] ?? null;
    }

    /**
     * Retrieves the auto-delete time for messages in the chat.
     *
     * @return int|null The time in seconds before messages are automatically deleted.
     */
    public function getMessageAutoDeleteTime(): ?int
    {
        return $this->data['message_auto_delete_time'] ?? null;
    }

    /**
     * Checks if aggressive anti-spam measures are enabled in the chat.
     *
     * @return bool|null True if aggressive anti-spam is enabled, otherwise null.
     */
    public function getHasAggressiveAntiSpamEnabled(): ?bool
    {
        return $this->data['has_aggressive_anti_spam_enabled'] ?? null;
    }

    /**
     * Checks if the chat has hidden members.
     *
     * @return bool|null True if the chat has hidden members, otherwise null.
     */
    public function getHasHiddenMembers(): ?bool
    {
        return $this->data['has_hidden_members'] ?? null;
    }

    /**
     * Checks if the chat has protected content.
     *
     * @return bool|null True if the chat has protected content, otherwise null.
     */
    public function getHasProtectedContent(): ?bool
    {
        return $this->data['has_protected_content'] ?? null;
    }

    /**
     * Checks if the chat has visible history for new members.
     *
     * @return bool|null True if the chat history is visible to new members, otherwise null.
     */
    public function getHasVisibleHistory(): ?bool
    {
        return $this->data['has_visible_history'] ?? null;
    }

    /**
     * Retrieves the name of the sticker set associated with the chat.
     *
     * @return string|null The name of the sticker set if available, otherwise null.
     */
    public function getStickerSetName(): ?string
    {
        return $this->data['sticker_set_name'] ?? null;
    }

    /**
     * Checks if the chat can set a new sticker set.
     *
     * @return bool|null True if the chat can set a new sticker set, otherwise null.
     */
    public function getCanSetStickerSet(): ?bool
    {
        return $this->data['can_set_sticker_set'] ?? null;
    }

    /**
     * Retrieves the name of the custom emoji sticker set associated with the chat.
     *
     * @return string|null The name of the custom emoji sticker set if available, otherwise null.
     */
    public function getCustomEmojiStickerSetName(): ?string
    {
        return $this->data['custom_emoji_sticker_set_name'] ?? null;
    }

    /**
     * Retrieves the identifier of the linked chat.
     *
     * @return int|null The identifier of the linked chat if available, otherwise null.
     */
    public function getLinkedChatId(): ?int
    {
        return $this->data['linked_chat_id'] ?? null;
    }

    /**
     * Retrieves the location associated with the chat.
     *
     * @return ChatLocation|null The location object if available, otherwise null.
     */
    public function getLocation(): ?ChatLocation
    {
        return isset($this->data['location']) ? new ChatLocation($this->data['location']) : null;
    }
}