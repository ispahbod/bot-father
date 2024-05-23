<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class KeyboardButtonRequestChat
{
    use DataConstructor;

    /**
     * Retrieves the signed 32-bit identifier of the request.
     *
     * @return int The request identifier.
     */
    public function getRequestId(): int
    {
        return $this->data['request_id'];
    }

    /**
     * Checks if the request is for a channel chat.
     *
     * @return bool True if requesting a channel chat, false otherwise.
     */
    public function isChatChannel(): bool
    {
        return $this->data['chat_is_channel'] ?? false;
    }

    /**
     * Checks if the request is for a forum supergroup.
     *
     * @return bool|null True if requesting a forum supergroup, false if requesting a non-forum chat, null if not specified.
     */
    public function isChatForum(): ?bool
    {
        return $this->data['chat_is_forum'] ?? null;
    }

    /**
     * Checks if the request is for a supergroup or channel with a username.
     *
     * @return bool|null True if requesting a chat with a username, false if without a username, null if not specified.
     */
    public function hasChatUsername(): ?bool
    {
        return $this->data['chat_has_username'] ?? null;
    }

    /**
     * Checks if the request is for a chat owned by the user.
     *
     * @return bool|null True if requesting a chat owned by the user, null if no additional restrictions are applied.
     */
    public function isChatCreated(): ?bool
    {
        return $this->data['chat_is_created'] ?? null;
    }

    /**
     * Retrieves the required administrator rights of the user in the chat.
     *
     * @return ChatAdministratorRights|null The required administrator rights, or null if not specified.
     */
    public function getUserAdministratorRights(): ?ChatAdministratorRights
    {
        return isset($this->data['user_administrator_rights']) ? new ChatAdministratorRights($this->data['user_administrator_rights']) : null;
    }

    /**
     * Retrieves the required administrator rights of the bot in the chat.
     *
     * @return ChatAdministratorRights|null The required administrator rights, or null if not specified.
     */
    public function getBotAdministratorRights(): ?ChatAdministratorRights
    {
        return isset($this->data['bot_administrator_rights']) ? new ChatAdministratorRights($this->data['bot_administrator_rights']) : null;
    }

    /**
     * Checks if the request is for a chat with the bot as a member.
     *
     * @return bool|null True if requesting a chat with the bot as a member, null if no additional restrictions are applied.
     */
    public function isBotMember(): ?bool
    {
        return $this->data['bot_is_member'] ?? null;
    }

    /**
     * Checks if the request includes the chat's title.
     *
     * @return bool|null True if requesting the chat's title, null if not specified.
     */
    public function isRequestTitle(): ?bool
    {
        return $this->data['request_title'] ?? null;
    }

    /**
     * Checks if the request includes the chat's username.
     *
     * @return bool|null True if requesting the chat's username, null if not specified.
     */
    public function isRequestUsername(): ?bool
    {
        return $this->data['request_username'] ?? null;
    }

    /**
     * Checks if the request includes the chat's photo.
     *
     * @return bool|null True if requesting the chat's photo, null if not specified.
     */
    public function isRequestPhoto(): ?bool
    {
        return $this->data['request_photo'] ?? null;
    }
}