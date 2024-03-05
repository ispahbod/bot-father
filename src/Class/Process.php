<?php

namespace Ispahbod\BotFather\Class;

use Ispahbod\BotFather\Constant\ContentType;
use Ispahbod\BotFather\Type\Callback;
use Ispahbod\BotFather\Type\Chat;
use Ispahbod\BotFather\Type\Message;
use Ispahbod\BotFather\Type\newChat;
use Ispahbod\BotFather\Type\oldChat;
use Ispahbod\BotFather\Type\PhotoSize;
use Ispahbod\BotFather\Type\User;

class Process
{
    protected array $data;
    protected string $type;

    public function __construct(array $data, string $type)
    {
        $this->data = $data;
        $this->type = $type;
    }
    public function IsNotEmpty(): bool
    {
        return !$this->IsEmpty();
    }
    public function IsEmpty(): bool
    {
        return empty($this->data);
    }

    public function GetCallbackId(): int|false
    {
        return $this->data['id'] ?? false;
    }

    public function GetMessage(): Message|false
    {
        return $this->IsEmpty() ? false : new Message($this->data);
    }

    public function GetCallback(): Callback
    {
        return new Callback($this->data ?? []);
    }

    public function GetFrom(): User
    {
        return new User($this->data['from'] ?? []);
    }

    public function GetChat(): Chat
    {
        return new Chat($this->data['chat'] ?? []);
    }

    public function GetForwardChat(): Chat
    {
        return new Chat($this->data['forward_from_chat'] ?? []);
    }

    public function GetPhoto(): PhotoSize
    {
        return new PhotoSize($this->data['photo'] ?? []);
    }

    public function GetCaption(): string
    {
        return $this->data['caption'] ?? "";
    }

    public function GetCaptionEntities(): array
    {
        return $this->data['caption_entities'] ?? [];
    }

    public function GetDate(): int|false
    {
        return $this->data['date'] ?? false;
    }

    public function IsForwarded(): bool
    {
        return isset($this->data['forward_date']);
    }

    public function GetForwardedType(): string
    {
        return isset($this->data['forward_from']) ? 'user' : 'channel';
    }

    public function GetForwardedMessageId(): int
    {
        return $this->data['forward_from_message_id'] ?? false;
    }

    public function GetWebhookType(): string|false
    {
        return $this->type;
    }

    public function GetContentType(): string|false
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
        return false;
    }

    public function GetOldChatMembers(): oldChat
    {
        return new oldChat($this->data['old_chat_member'] ?? []);
    }

    public function GetUserShared()
    {
        return $this->data['user_shared'] ?? null;
    }

    public function GetChatShared()
    {
        return $this->data['chat_shared'] ?? null;
    }

    public function GetInviteLink()
    {
        return $this->data['invite_link'] ?? null;
    }

    public function GetNewChatMember()
    {
        return $this->data['new_chat_member'] ?? null;
    }

    public function GetOldChatMember()
    {
        return $this->data['old_chat_member'] ?? null;
    }

    public function GetNewChatMembers(): newChat
    {
        return new newChat($this->data['new_chat_members'] ?? []);
    }

    public function GetLeftChatMember()
    {
        return $this->data['left_chat_member'] ?? [];
    }

    public function GetLeftChatParticipant()
    {
        return new $this->data['left_chat_participant'] ?? [];
    }

    public function GetNewChatTitle()
    {
        return $this->data['new_chat_title'] ?? null;
    }

    public function GetNewChatPhoto(): PhotoSize
    {
        return new PhotoSize($this->data['new_chat_photo']);
    }

    public function GetDeleteChatPhoto(): bool
    {
        return $this->data['delete_chat_photo'] ?? false;
    }

    public function GetGroupChatCreated(): bool
    {
        return $this->data['group_chat_created'] ?? false;
    }

    public function GetSupergroupChatCreated(): bool
    {
        return $this->data['supergroup_chat_created'] ?? false;
    }

    public function GetChannelChatCreated(): bool
    {
        return $this->data['channel_chat_created'] ?? false;
    }

    public function GetMessageAutoDeleteTimerChanged(): string|false
    {
        return $this->data['message_auto_delete_timer_changed'] ?? false;
    }

    public function GetMigrateToChatId(): int|false
    {
        return $this->data['migrate_to_chat_id'] ?? false;
    }

    public function GetMigrateFromChatId(): int|false
    {
        return $this->data['migrate_from_chat_id'] ?? false;
    }

    public function GetPinnedMessage(): Message
    {
        return new Message($this->data['pinned_message'] ?? []);
    }
}
