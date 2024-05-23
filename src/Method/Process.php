<?php

namespace Ispahbod\BotFather\Method;

use Ispahbod\BotFather\Constant\ContentType;
use Ispahbod\BotFather\Type\Callback;
use Ispahbod\BotFather\Type\Chat;
use Ispahbod\BotFather\Type\ChatMember;
use Ispahbod\BotFather\Type\ChatShared;
use Ispahbod\BotFather\Type\Message;
use Ispahbod\BotFather\Type\MessageAutoDeleteTimerChanged;
use Ispahbod\BotFather\Type\MessageEntity;
use Ispahbod\BotFather\Type\newChat;
use Ispahbod\BotFather\Type\oldChat;
use Ispahbod\BotFather\Type\PhotoSize;
use Ispahbod\BotFather\Type\User;
use Ispahbod\BotFather\Type\UsersShared;

class Process
{
    protected ?array $data;
    protected ?string $type;

    public function __construct(?array $data, ?string $type)
    {
        $this->data = $data;
        $this->type = $type;
    }

    public function isNotEmpty(): bool
    {
        return !$this->IsEmpty();
    }

    public function isEmpty(): bool
    {
        return empty($this->data);
    }

    public function getCallbackId(): int|false
    {
        return $this->data['id'] ?? false;
    }

    public function getMessage(): ?Message
    {
        return $this->IsNotEmpty() ? new Message($this->data) : null;
    }

    public function getCallback(): ?Callback
    {
        return $this->IsNotEmpty() ? new Callback($this->data) : null;
    }

    public function getFrom(): ?User
    {
        return $this->IsNotEmpty() ? new User($this->data['from']) : null;
    }

    public function getChat(): ?Chat
    {
        return $this->IsNotEmpty() ? new Chat($this->data['chat']) : null;

    }

    public function getForwardChat(): ?Chat
    {
        return $this->IsNotEmpty() ? new Chat($this->data['forward_from_chat']) : null;
    }

    public function getPhoto(): ?PhotoSize
    {
        return $this->IsNotEmpty() ? new PhotoSize($this->data['photo']) : null;
    }

    public function getCaption(): ?string
    {
        return $this->data['caption'] ?? null;
    }

    public function getCaptionEntities(): array
    {
        return array_map(static function ($entity) {
            return new MessageEntity($entity);
        }, $this->data['caption_entities']);
    }

    public function getDate(): ?int
    {
        return $this->data['date'] ?? null;
    }

    public function IsForwarded(): bool
    {
        return isset($this->data['forward_date']);
    }

    public function getForwardedType(): string
    {
        return isset($this->data['forward_from']) ? 'user' : 'channel';
    }

    public function getForwardedMessageId(): int
    {
        return $this->data['forward_from_message_id'] ?? false;
    }

    public function getWebhookType(): ?string
    {
        return $this->type ?? null;
    }

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

    public function getOldChatMembers(): ChatMember
    {
        return new ChatMember($this->data['old_chat_member'] ?? []);
    }

    public function getUserShared(): ?UsersShared
    {
        return new UsersShared($this->data['user_shared']) ?? null;
    }

    public function getChatShared(): ?ChatShared
    {
        return new ChatShared($this->data['chat_shared']) ?? null;
    }

    public function getInviteLink()
    {
        return $this->data['invite_link'] ?? null;
    }

    public function getNewChatMember(): ?ChatMember
    {
        return new ChatMember($this->data['new_chat_member']) ?? null;
    }

    public function getOldChatMember(): ?ChatMember
    {
        return new ChatMember($this->data['old_chat_member']) ?? null;
    }

    public function getNewChatMembers(): array
    {
        return array_map(static function ($user) {
            return new User($user);
        }, $this->data['new_chat_members']);
    }

    public function getLeftChatMember(): ?User
    {
        return new User($this->data['left_chat_member']) ?? null;
    }

    public function getLeftChatParticipant()
    {
        return new $this->data['left_chat_participant'] ?? [];
    }

    public function getNewChatTitle()
    {
        return $this->data['new_chat_title'] ?? null;
    }

    public function getNewChatPhoto(): array
    {
        return array_map(static function ($photo) {
            return new PhotoSize($photo);
        }, $this->data['new_chat_photo']);
    }

    public function getDeleteChatPhoto(): bool
    {
        return $this->data['delete_chat_photo'] ?? false;
    }

    public function getGroupChatCreated(): bool
    {
        return $this->data['group_chat_created'] ?? false;
    }

    public function getSupergroupChatCreated(): bool
    {
        return $this->data['supergroup_chat_created'] ?? false;
    }

    public function getChannelChatCreated(): bool
    {
        return $this->data['channel_chat_created'] ?? false;
    }

    public function getMessageAutoDeleteTimerChanged(): ?MessageAutoDeleteTimerChanged
    {
        return new MessageAutoDeleteTimerChanged($this->data['message_auto_delete_timer_changed']) ?? null;
    }

    public function getMigrateToChatId(): ?int
    {
        return $this->data['migrate_to_chat_id'] ?? null;
    }

    public function getMigrateFromChatId(): ?int
    {
        return $this->data['migrate_from_chat_id'] ?? null;
    }

    public function getPinnedMessage(): Message
    {
        return new Message($this->data['pinned_message'] ?? []);
    }
}
