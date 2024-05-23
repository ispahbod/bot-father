<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class LoginUrl
{
    use DataConstructor;

    /**
     * Retrieves the HTTPS URL to be opened with user authorization data added to the query string when the button is pressed.
     *
     * @return string The HTTPS URL.
     */
    public function getUrl(): string
    {
        return $this->data['url'];
    }

    /**
     * Retrieves the new text of the button in forwarded messages.
     * This is optional.
     *
     * @return string|null The new text of the button in forwarded messages, or null if not available.
     */
    public function getForwardText(): ?string
    {
        return $this->data['forward_text'] ?? null;
    }

    /**
     * Retrieves the username of a bot, which will be used for user authorization.
     * This is optional.
     *
     * @return string|null The username of the bot, or null if not specified.
     */
    public function getBotUsername(): ?string
    {
        return $this->data['bot_username'] ?? null;
    }

    /**
     * Checks if the permission for the bot to send messages to the user is requested.
     * This is optional.
     *
     * @return bool True if permission is requested, otherwise false.
     */
    public function isRequestWriteAccess(): bool
    {
        return $this->data['request_write_access'] ?? false;
    }
}