<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class SwitchInlineQueryChosenChat
{
    use DataConstructor;

    /**
     * Retrieves the default inline query to be inserted in the input field.
     * If left empty, only the bot's username will be inserted.
     *
     * @return string|null The default inline query or null if not available.
     */
    public function getQuery(): ?string
    {
        return $this->data['query'] ?? null;
    }

    /**
     * Checks if private chats with users can be chosen.
     *
     * @return bool True if private chats with users can be chosen, otherwise false.
     */
    public function allowUserChats(): bool
    {
        return $this->data['allow_user_chats'] ?? false;
    }

    /**
     * Checks if private chats with bots can be chosen.
     *
     * @return bool True if private chats with bots can be chosen, otherwise false.
     */
    public function allowBotChats(): bool
    {
        return $this->data['allow_bot_chats'] ?? false;
    }

    /**
     * Checks if group and supergroup chats can be chosen.
     *
     * @return bool True if group and supergroup chats can be chosen, otherwise false.
     */
    public function allowGroupChats(): bool
    {
        return $this->data['allow_group_chats'] ?? false;
    }

    /**
     * Checks if channel chats can be chosen.
     *
     * @return bool True if channel chats can be chosen, otherwise false.
     */
    public function allowChannelChats(): bool
    {
        return $this->data['allow_channel_chats'] ?? false;
    }
}