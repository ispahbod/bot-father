<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class ChatShared
{
    use DataConstructor;
    /**
     * Retrieves the identifier of the request.
     *
     * @return int Identifier of the request.
     */
    public function getRequestId(): int
    {
        return $this->data['request_id'];
    }

    /**
     * Retrieves the identifier of the shared chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the chat and could be unable to use this identifier, unless the chat is already known to the bot by some other means.
     *
     * @return int Identifier of the shared chat.
     */
    public function getChatId(): int
    {
        return $this->data['chat_id'];
    }

    /**
     * Retrieves the title of the chat if it was requested by the bot.
     *
     * @return string|null Title of the chat, or null if not available.
     */
    public function getTitle(): ?string
    {
        return $this->data['title'] ?? null;
    }

    /**
     * Retrieves the username of the chat if it was requested by the bot and available.
     *
     * @return string|null Username of the chat, or null if not available.
     */
    public function getUsername(): ?string
    {
        return $this->data['username'] ?? null;
    }

    /**
     * Retrieves the available sizes of the chat photo if the photo was requested by the bot.
     * Each size is represented by a PhotoSize object.
     *
     * @return array|null Array of PhotoSize objects representing the available sizes of the chat photo, or null if not available.
     */
    public function getPhoto(): ?array
    {
        return isset($this->data['photo']) ? array_map(function ($photoSize) {
            return new PhotoSize($photoSize);
        }, $this->data['photo']) : null;
    }
}
