<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Constant\ContentType;
use Ispahbod\BotFather\Trait\DataConstructor;

final class Message
{
    use DataConstructor;

    public function getContentType(): ?string
    {
        $types = [
            ContentType::TEXT,
            ContentType::ANIMATION,
            ContentType::AUDIO,
            ContentType::DOCUMENT,
            ContentType::PHOTO,
            ContentType::STICKER,
            ContentType::STORY,
            ContentType::VIDEO,
            ContentType::VIDEO_NOTE,
            ContentType::VOICE,
            ContentType::CAPTION,
            ContentType::CONTACT,
            ContentType::DICE,
            ContentType::GAME,
            ContentType::POLL,
            ContentType::VENUE,
            ContentType::LOCATION,
            ContentType::INVOICE,
            ContentType::LEFT_CHAT_MEMBER,
            ContentType::NEW_CHAT_MEMBER,
            ContentType::NEW_CHAT_TITLE,
            ContentType::NEW_CHAT_PHOTO,
            ContentType::DELETE_CHAT_PHOTO,
            ContentType::GROUP_CHAT_CREATED,
            ContentType::SUPERGROUP_CHAT_CREATED,
            ContentType::CHANNEL_CHAT_CREATED,
            ContentType::MESSAGE_AUTO_DELETE_TIMER_CHANGED,
            ContentType::MIGRATE_TO_CHAT_ID,
            ContentType::PINNED_MESSAGE,
            ContentType::MIGRATE_FROM_CHAT_ID,
        ];
        foreach ($types as $type) {
            if (isset($this->data[$type])) {
                return $type;
            }
        }
        return null;
    }

    public function getMessageId(): ?int
    {
        return $this->data['message_id'] ?? null;
    }

    public function getMessageThreadId(): ?int
    {
        return $this->data['message_thread_id'] ?? null;
    }

    public function getFrom(): ?User
    {
        return isset($this->data['from']) ? new User($this->data['from']) : null;
    }

    public function getSenderChat(): ?Chat
    {
        return isset($this->data['sender_chat']) ? new Chat($this->data['sender_chat']) : null;
    }

    public function getSenderBoostCount(): ?int
    {
        return $this->data['sender_boost_count'] ?? null;
    }

    public function getSenderBusinessBot(): ?User
    {
        return isset($this->data['sender_business_bot']) ? new User($this->data['sender_business_bot']) : null;
    }

    public function getDate(): ?int
    {
        return $this->data['date'] ?? null;
    }

    public function getBusinessConnectionId(): ?string
    {
        return $this->data['business_connection_id'] ?? null;
    }

    public function getChat(): ?Chat
    {
        return isset($this->data['chat']) ? new Chat($this->data['chat']) : null;
    }

    public function getIsTopicMessage(): ?bool
    {
        return $this->data['is_topic_message'] ?? null;
    }

    public function getIsAutomaticForward(): ?bool
    {
        return $this->data['is_automatic_forward'] ?? null;
    }

    public function getReplyToMessage(): ?Message
    {
        return isset($this->data['reply_to_message']) ? new Message($this->data['reply_to_message']) : null;
    }

    public function getExternalReply(): ?ExternalReplyInfo
    {
        return isset($this->data['external_reply']) ? new ExternalReplyInfo($this->data['external_reply']) : null;
    }

    public function getQuote(): ?TextQuote
    {
        return isset($this->data['quote']) ? new TextQuote($this->data['quote']) : null;
    }

    public function getReplyToStory(): ?Story
    {
        return isset($this->data['reply_to_story']) ? new Story($this->data['reply_to_story']) : null;
    }

    public function getViaBot(): ?User
    {
        return isset($this->data['via_bot']) ? new User($this->data['via_bot']) : null;
    }

    public function getEditDate(): ?int
    {
        return $this->data['edit_date'] ?? null;
    }

    public function getHasProtectedContent(): ?bool
    {
        return $this->data['has_protected_content'] ?? null;
    }

    public function getIsFromOffline(): ?bool
    {
        return $this->data['is_from_offline'] ?? null;
    }

    public function getMediaGroupId(): ?string
    {
        return $this->data['media_group_id'] ?? null;
    }

    public function getAuthorSignature(): ?string
    {
        return $this->data['author_signature'] ?? null;
    }

    public function getText(): ?string
    {
        return $this->data['text'] ?? null;
    }

    public function getEntities(): ?array
    {
        return $this->data['entities'] ?? null;
    }

    public function getLinkPreviewOptions(): ?LinkPreviewOptions
    {
        return isset($this->data['link_preview_options']) ? new LinkPreviewOptions($this->data['link_preview_options']) : null;
    }

    public function getAnimation(): ?Animation
    {
        return isset($this->data['animation']) ? new Animation($this->data['animation']) : null;
    }

    public function getAudio(): ?Audio
    {
        return isset($this->data['audio']) ? new Audio($this->data['audio']) : null;
    }

    public function getDocument(): ?Document
    {
        return isset($this->data['document']) ? new Document($this->data['document']) : null;
    }

    public function getPhoto(): ?array
    {
        return $this->data['photo'] ?? null;
    }

    public function getSticker(): ?Sticker
    {
        return isset($this->data['sticker']) ? new Sticker($this->data['sticker']) : null;
    }

    public function getStory(): ?Story
    {
        return isset($this->data['story']) ? new Story($this->data['story']) : null;
    }

    public function getVideo(): ?Video
    {
        return isset($this->data['video']) ? new Video($this->data['video']) : null;
    }

    public function getVideoNote(): ?VideoNote
    {
        return isset($this->data['video_note']) ? new VideoNote($this->data['video_note']) : null;
    }

    public function getVoice(): ?Voice
    {
        return isset($this->data['voice']) ? new Voice($this->data['voice']) : null;
    }

    public function getCaption(): ?string
    {
        return $this->data['caption'] ?? null;
    }

    public function getCaptionEntities(): ?array
    {
        return $this->data['caption_entities'] ?? null;
    }

    public function getHasMediaSpoiler(): ?bool
    {
        return $this->data['has_media_spoiler'] ?? null;
    }

    public function getContact(): ?Contact
    {
        return isset($this->data['contact']) ? new Contact($this->data['contact']) : null;
    }

    public function getDice(): ?Dice
    {
        return isset($this->data['dice']) ? new Dice($this->data['dice']) : null;
    }

    public function getGame(): ?Game
    {
        return isset($this->data['game']) ? new Game($this->data['game']) : null;
    }

    public function getPoll(): ?Poll
    {
        return isset($this->data['poll']) ? new Poll($this->data['poll']) : null;
    }

    public function getVenue(): ?Venue
    {
        return isset($this->data['venue']) ? new Venue($this->data['venue']) : null;
    }

    public function getLocation(): ?Location
    {
        return isset($this->data['location']) ? new Location($this->data['location']) : null;
    }

    public function getNewChatMembers(): ?array
    {
        return $this->data['new_chat_members'] ?? null;
    }

    public function getLeftChatMember(): ?User
    {
        return isset($this->data['left_chat_member']) ? new User($this->data['left_chat_member']) : null;
    }

    public function getNewChatTitle(): ?string
    {
        return $this->data['new_chat_title'] ?? null;
    }

    public function getNewChatPhoto(): ?array
    {
        return $this->data['new_chat_photo'] ?? null;
    }

    public function getDeleteChatPhoto(): ?bool
    {
        return $this->data['delete_chat_photo'] ?? null;
    }

    public function getGroupChatCreated(): ?bool
    {
        return $this->data['group_chat_created'] ?? null;
    }

    public function getSupergroupChatCreated(): ?bool
    {
        return $this->data['supergroup_chat_created'] ?? null;
    }

    public function getChannelChatCreated(): ?bool
    {
        return $this->data['channel_chat_created'] ?? null;
    }

    public function getMessageAutoDeleteTimerChanged(): ?MessageAutoDeleteTimerChanged
    {
        return isset($this->data['message_auto_delete_timer_changed']) ? new MessageAutoDeleteTimerChanged($this->data['message_auto_delete_timer_changed']) : null;
    }

    public function getMigrateToChatId(): ?int
    {
        return $this->data['migrate_to_chat_id'] ?? null;
    }

    public function getMigrateFromChatId(): ?int
    {
        return $this->data['migrate_from_chat_id'] ?? null;
    }

    public function getPinnedMessage(): ?MaybeInaccessibleMessage
    {
        return isset($this->data['pinned_message']) ? new MaybeInaccessibleMessage($this->data['pinned_message']) : null;
    }

    public function getInvoice(): ?Invoice
    {
        return isset($this->data['invoice']) ? new Invoice($this->data['invoice']) : null;
    }

    public function getSuccessfulPayment(): ?SuccessfulPayment
    {
        return isset($this->data['successful_payment']) ? new SuccessfulPayment($this->data['successful_payment']) : null;
    }

    public function getUsersShared(): ?UsersShared
    {
        return isset($this->data['users_shared']) ? new UsersShared($this->data['users_shared']) : null;
    }

    public function getChatShared(): ?ChatShared
    {
        return isset($this->data['chat_shared']) ? new ChatShared($this->data['chat_shared']) : null;
    }

    public function getConnectedWebsite(): ?string
    {
        return $this->data['connected_website'] ?? null;
    }

    public function getWriteAccessAllowed(): ?WriteAccessAllowed
    {
        return isset($this->data['write_access_allowed']) ? new WriteAccessAllowed($this->data['write_access_allowed']) : null;
    }

    public function getPassportData(): ?PassportData
    {
        return isset($this->data['passport_data']) ? new PassportData($this->data['passport_data']) : null;
    }

    public function getProximityAlertTriggered(): ?ProximityAlertTriggered
    {
        return isset($this->data['proximity_alert_triggered']) ? new ProximityAlertTriggered($this->data['proximity_alert_triggered']) : null;
    }

    public function getBoostAdded(): ?ChatBoostAdded
    {
        return isset($this->data['boost_added']) ? new ChatBoostAdded($this->data['boost_added']) : null;
    }

    public function getChatBackgroundSet(): ?ChatBackground
    {
        return isset($this->data['chat_background_set']) ? new ChatBackground($this->data['chat_background_set']) : null;
    }

    public function getForumTopicCreated(): ?ForumTopicCreated
    {
        return isset($this->data['forum_topic_created']) ? new ForumTopicCreated($this->data['forum_topic_created']) : null;
    }

    public function getForumTopicEdited(): ?ForumTopicEdited
    {
        return isset($this->data['forum_topic_edited']) ? new ForumTopicEdited($this->data['forum_topic_edited']) : null;
    }

    public function getForumTopicClosed(): ?ForumTopicClosed
    {
        return isset($this->data['forum_topic_closed']) ? new ForumTopicClosed($this->data['forum_topic_closed']) : null;
    }

    public function getForumTopicReopened(): ?ForumTopicReopened
    {
        return isset($this->data['forum_topic_reopened']) ? new ForumTopicReopened($this->data['forum_topic_reopened']) : null;
    }

    public function getGeneralForumTopicHidden(): ?GeneralForumTopicHidden
    {
        return isset($this->data['general_forum_topic_hidden']) ? new GeneralForumTopicHidden($this->data['general_forum_topic_hidden']) : null;
    }

    public function getGeneralForumTopicUnhidden(): ?GeneralForumTopicUnhidden
    {
        return isset($this->data['general_forum_topic_unhidden']) ? new GeneralForumTopicUnhidden($this->data['general_forum_topic_unhidden']) : null;
    }

    public function getGiveawayCreated(): ?GiveawayCreated
    {
        return isset($this->data['giveaway_created']) ? new GiveawayCreated($this->data['giveaway_created']) : null;
    }

    public function getGiveaway(): ?Giveaway
    {
        return isset($this->data['giveaway']) ? new Giveaway($this->data['giveaway']) : null;
    }

    public function getGiveawayWinners(): ?GiveawayWinners
    {
        return isset($this->data['giveaway_winners']) ? new GiveawayWinners($this->data['giveaway_winners']) : null;
    }

    public function getGiveawayCompleted(): ?GiveawayCompleted
    {
        return isset($this->data['giveaway_completed']) ? new GiveawayCompleted($this->data['giveaway_completed']) : null;
    }

    public function getVideoChatScheduled(): ?VideoChatScheduled
    {
        return isset($this->data['video_chat_scheduled']) ? new VideoChatScheduled($this->data['video_chat_scheduled']) : null;
    }

    public function getVideoChatStarted(): ?VideoChatStarted
    {
        return isset($this->data['video_chat_started']) ? new VideoChatStarted($this->data['video_chat_started']) : null;
    }

    public function getVideoChatEnded(): ?VideoChatEnded
    {
        return isset($this->data['video_chat_ended']) ? new VideoChatEnded($this->data['video_chat_ended']) : null;
    }

    public function getVideoChatParticipantsInvited(): ?VideoChatParticipantsInvited
    {
        return isset($this->data['video_chat_participants_invited']) ? new VideoChatParticipantsInvited($this->data['video_chat_participants_invited']) : null;
    }

    public function getWebAppData(): ?WebAppData
    {
        return isset($this->data['web_app_data']) ? new WebAppData($this->data['web_app_data']) : null;
    }

    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return isset($this->data['reply_markup']) ? new InlineKeyboardMarkup($this->data['reply_markup']) : null;
    }

    public function getEffectId(): ?string
    {
        return $this->data['effect_id'] ?? null;
    }

    public function getForwardOrigin(): ?MessageOrigin
    {
        return isset($this->data['forward_origin']) ? new MessageOrigin($this->data['forward_origin']) : null;
    }

    public function getForwardFrom(): ?User
    {
        return isset($this->data['forward_from']) ? new User($this->data['forward_from']) : null;
    }

    public function getForwardChat(): ?Chat
    {
        return isset($this->data['forward_from_chat']) ? new Chat($this->data['forward_from_chat']) : null;
    }

    public function getForwardDate(): ?string
    {
        return $this->data['forward_date'] ?? null;
    }

    public function getForwardFromMessageId(): ?string
    {
        return $this->data['forward_from_message_id'] ?? null;
    }

    public function isForwarded(): bool
    {
        return isset($this->data['forward_date']);
    }
}
