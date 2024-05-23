<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class KeyboardButton
{
    use DataConstructor;

    /**
     * Retrieves the text of the button.
     *
     * @return string The text of the button.
     */
    public function getText(): string
    {
        return $this->data['text'];
    }

    /**
     * Retrieves the request for users if specified.
     *
     * @return KeyboardButtonRequestUsers|null The request for users, or null if not available.
     */
    public function getRequestUsers(): ?KeyboardButtonRequestUsers
    {
        return isset($this->data['request_users']) ? new KeyboardButtonRequestUsers($this->data['request_users']) : null;
    }

    /**
     * Retrieves the request for chat if specified.
     *
     * @return KeyboardButtonRequestChat|null The request for chat, or null if not available.
     */
    public function getRequestChat(): ?KeyboardButtonRequestChat
    {
        return isset($this->data['request_chat']) ? new KeyboardButtonRequestChat($this->data['request_chat']) : null;
    }

    /**
     * Checks if the button requests the user's contact.
     *
     * @return bool True if the button requests the user's contact, false otherwise.
     */
    public function isRequestContact(): bool
    {
        return $this->data['request_contact'] ?? false;
    }

    /**
     * Checks if the button requests the user's location.
     *
     * @return bool True if the button requests the user's location, false otherwise.
     */
    public function isRequestLocation(): bool
    {
        return $this->data['request_location'] ?? false;
    }

    /**
     * Retrieves the request for a poll if specified.
     *
     * @return KeyboardButtonPollType|null The request for a poll, or null if not available.
     */
    public function getRequestPoll(): ?KeyboardButtonPollType
    {
        return isset($this->data['request_poll']) ? new KeyboardButtonPollType($this->data['request_poll']) : null;
    }

    /**
     * Retrieves the Web App info if specified.
     *
     * @return WebAppInfo|null The Web App info, or null if not available.
     */
    public function getWebApp(): ?WebAppInfo
    {
        return isset($this->data['web_app']) ? new WebAppInfo($this->data['web_app']) : null;
    }
}