<?php

namespace LaravelBot\BotFather\Type;

use Carbon\Carbon;
use LaravelBot\BotFather\Trait\DataConstructor;

class Message
{
    use DataConstructor;

    public function GetMessageId(): ?int
    {
        return $this->data['message_id'] ?? null;
    }

    public function GetMessageThreadId(): ?int
    {
        return $this->data['message_thread_id'] ?? null;
    }

    public function GetFrom(): User
    {
        return new User($this->data['from'] ?? []);
    }

    public function GetSenderChat(): Chat
    {
        return new Chat($this->data['sender_chat'] ?? []);
    }

    public function GetDate()
    {
        return Carbon::createFromTimeString($this->data['date'] ?? 0);
    }

    public function GetChat(): Chat
    {
        return new Chat($this->data['chat'] ?? []);
    }

    public function GetForwardOrigin(): MessageOrigin
    {
        return new MessageOrigin($this->data['forward_origin'] ?? []);
    }

    public function GetIsTopicMessage(): ?bool
    {
        return $this->data['is_topic_message'] ?? null;
    }

    public function GetIsAutomaticForward(): ?bool
    {
        return $this->data['is_automatic_forward'] ?? null;
    }

    public function GetReplyToMessage(): Message
    {
        return new Message($this->data['reply_to_message'] ?? []);
    }

    public function GetExternalReply(): ExternalReplyInfo
    {
        return new ExternalReplyInfo($this->data['external_reply'] ?? []);
    }

    public function GetQuote(): TextQuote
    {
        return new TextQuote($this->data['quote'] ?? []);
    }

    public function GetViaBot(): User
    {
        return new User($this->data['via_bot'] ?? []);
    }

    public function GetEditDate(): ?int
    {
        return $this->data['edit_date'] ?? null;
    }

    public function GetHasProtectedContent(): ?bool
    {
        return $this->data['has_protected_content'] ?? null;
    }

    public function GetMediaGroupId(): ?string
    {
        return $this->data['media_group_id'] ?? null;
    }

    public function GetAuthorSignature(): ?string
    {
        return $this->data['author_signature'] ?? null;
    }

    public function GetText(): ?string
    {
        return $this->data['text'] ?? null;
    }

    public function GetEntities(): ?array
    {
        return $this->data['entities'] ?? null;
    }

    public function GetLinkPreviewOptions(): LinkPreviewOptions
    {
        return new LinkPreviewOptions($this->data['link_preview_options'] ?? []);
    }

    public function GetAnimation(): Animation
    {
        return new Animation($this->data['animation'] ?? []);
    }

    public function GetAudio(): Audio
    {
        return new Audio($this->data['audio'] ?? []);
    }

    public function GetDocument(): Document
    {
        return new Document($this->data['document'] ?? []);
    }

    public function GetPhoto(): PhotoSize
    {
        return new PhotoSize($this->data['photo'] ?? []);
    }

    public function GetSticker(): Sticker
    {
        return new Sticker($this->data['sticker'] ?? []);
    }

    public function GetStory(): Story
    {
        return new Story($this->data['story'] ?? []);
    }

    public function GetVideo(): Video
    {
        return new Video($this->data['video'] ?? []);
    }

    public function GetVideoNote(): VideoNote
    {
        return new VideoNote($this->data['video_note'] ?? []);
    }

    public function GetVoice(): Voice
    {
        return new Voice($this->data['voice'] ?? []);
    }

    public function GetCaption(): ?string
    {
        return $this->data['caption'] ?? null;
    }

    public function GetCaptionEntities(): MessageEntity
    {
        return new MessageEntity($this->data['caption_entities'] ?? []);
    }

    public function GetHasMediaSpoiler(): ?bool
    {
        return $this->data['has_media_spoiler'] ?? null;
    }

    public function GetContact(): Contact
    {
        return new Contact($this->data['contact'] ?? []);
    }

    public function GetDice(): Dice
    {
        return new Dice($this->data['dice'] ?? []);
    }

    public function GetGame(): Game
    {
        return new Game($this->data['game'] ?? null);
    }

    public function GetPoll(): Poll
    {
        return new Poll($this->data['poll'] ?? []);
    }

    public function GetVenue(): Venue
    {
        return new Venue($this->data['venue'] ?? []);
    }

    public function GetLocation(): Location
    {
        return new Location($this->data['location'] ?? []);
    }

    public function GetNewChatMembers(): User
    {
        return new User($this->data['new_chat_members'] ?? []);
    }

    public function GetLeftChatMember(): User
    {
        return new User($this->data['left_chat_member'] ?? []);

    }

    public function GetNewChatTitle(): ?string
    {
        return $this->data['new_chat_title'] ?? null;
    }

    public function GetNewChatPhoto(): PhotoSize
    {
        return new PhotoSize($this->data['new_chat_photo'] ?? []);
    }

    public function GetDeleteChatPhoto(): ?bool
    {
        return $this->data['delete_chat_photo'] ?? null;
    }

    public function GetGroupChatCreated(): ?bool
    {
        return $this->data['group_chat_created'] ?? null;
    }

    public function GetSupergroupChatCreated(): ?bool
    {
        return $this->data['supergroup_chat_created'] ?? null;
    }

    public function GetChannelChatCreated(): ?bool
    {
        return $this->data['channel_chat_created'] ?? null;
    }

    public function GetMessageAutoDeleteTimerChanged(): MessageAutoDeleteTimerChanged
    {
        return new MessageAutoDeleteTimerChanged($this->data['message_auto_delete_timer_changed'] ?? []);
    }

    public function GetMigrateToChatId(): ?int
    {
        return $this->data['migrate_to_chat_id'] ?? null;
    }

    public function GetMigrateFromChatId(): ?int
    {
        return $this->data['migrate_from_chat_id'] ?? null;
    }

    public function GetPinnedMessage(): MaybeInaccessibleMessage
    {
        return new MaybeInaccessibleMessage($this->data['pinned_message'] ?? []);
    }

    public function GetInvoice(): Invoice
    {
        return new Invoice($this->data['invoice'] ?? []);
    }


    public function GetSuccessfulPayment(): SuccessfulPayment
    {
        return new SuccessfulPayment($this->data['successful_payment'] ?? []);
    }

    public function GetUsersShared(): UsersShared
    {
        return new UsersShared($this->data['users_shared'] ?? []);

    }

    public function GetChatShared(): ChatShared
    {
        return new ChatShared($this->data['chat_shared'] ?? []);
    }

    public function GetConnectedWebsite(): ?string
    {
        return $this->data['connected_website'] ?? null;
    }

    public function GetWriteAccessAllowed(): WriteAccessAllowed
    {
        return new WriteAccessAllowed($this->data['write_access_allowed'] ?? []);
    }

    public function GetPassportData(): PassportData
    {
        return new PassportData($this->data['passport_data'] ?? []);
    }


    public function GetProximityAlertTriggered(): ProximityAlertTriggered
    {
        return new ProximityAlertTriggered($this->data['proximity_alert_triggered'] ?? []);
    }

    public function GetForumTopicCreated(): ForumTopicCreated
    {
        return new ForumTopicCreated($this->data['forum_topic_created'] ?? []);
    }

    public function GetForumTopicEdited(): ForumTopicEdited
    {
        return new ForumTopicEdited($this->data['forum_topic_edited'] ?? []);
    }

    public function GetForumTopicClosed(): ForumTopicClosed
    {
        return new ForumTopicClosed($this->data['forum_topic_closed'] ?? []);
    }


    public function GetForumTopicReopened(): ForumTopicReopened
    {
        return new ForumTopicReopened($this->data['forum_topic_reopened'] ?? []);
    }

    public function GetGeneralForumTopicHidden(): GeneralForumTopicHidden
    {
        return new GeneralForumTopicHidden($this->data['general_forum_topic_hidden'] ?? []);
    }

    public function GetGeneralForumTopicUnhidden(): GeneralForumTopicUnhidden
    {
        return new GeneralForumTopicUnhidden($this->data['general_forum_topic_unhidden'] ?? []);
    }

    public function GetGiveawayCreated(): GiveawayCreated
    {
        return new GiveawayCreated($this->data['giveaway_created'] ?? []);
    }

    public function GetGiveaway(): Giveaway
    {
        return new Giveaway($this->data['giveaway'] ?? []);
    }

    public function GetGiveawayWinners(): GiveawayWinners
    {
        return new GiveawayWinners($this->data['giveaway_winners'] ?? []);
    }

    public function GetGiveawayCompleted(): GiveawayCompleted
    {
        return new GiveawayCompleted($this->data['giveaway_completed'] ?? []);
    }

    public function GetVideoChatScheduled(): VideoChatScheduled
    {
        return new VideoChatScheduled($this->data['video_chat_scheduled'] ?? []);
    }

    public function GetVideoChatStarted(): VideoChatStarted
    {
        return new VideoChatStarted($this->data['video_chat_started'] ?? []);
    }

    public function GetVideoChatEnded(): VideoChatEnded
    {
        return new VideoChatEnded($this->data['video_chat_ended'] ?? []);
    }

    public function GetVideoChatParticipantsInvited(): VideoChatParticipantsInvited
    {
        return new VideoChatParticipantsInvited($this->data['video_chat_participants_invited'] ?? []);
    }

    public function GetWebAppData(): WebAppData
    {
        return new WebAppData($this->data['web_app_data'] ?? []);
    }

    public function GetReplyMarkup(): InlineKeyboardMarkup
    {
        return new InlineKeyboardMarkup($this->data['reply_markup'] ?? []);
    }

}