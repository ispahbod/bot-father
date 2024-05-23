<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class InlineKeyboardButton
{
    use DataConstructor;

    /**
     * Retrieves the label text on the button.
     *
     * @return string The label text on the button.
     */
    public function getText(): string
    {
        return $this->data['text'];
    }

    /**
     * Retrieves the URL to be opened when the button is pressed.
     *
     * @return string|null The URL, or null if not available.
     */
    public function getUrl(): ?string
    {
        return $this->data['url'] ?? null;
    }

    /**
     * Retrieves the callback data sent in a callback query to the bot when the button is pressed.
     *
     * @return string|null The callback data, or null if not available.
     */
    public function getCallbackData(): ?string
    {
        return $this->data['callback_data'] ?? null;
    }

    /**
     * Retrieves the description of the Web App that will be launched when the button is pressed.
     *
     * @return WebAppInfo|null The Web App info, or null if not available.
     */
    public function getWebApp(): ?WebAppInfo
    {
        return isset($this->data['web_app']) ? new WebAppInfo($this->data['web_app']) : null;
    }

    /**
     * Retrieves the HTTPS URL used to automatically authorize the user.
     *
     * @return LoginUrl|null The Login URL, or null if not available.
     */
    public function getLoginUrl(): ?LoginUrl
    {
        return isset($this->data['login_url']) ? new LoginUrl($this->data['login_url']) : null;
    }

    /**
     * Retrieves the inline query to be inserted in a chat when the button is pressed.
     *
     * @return string|null The inline query, or null if not available.
     */
    public function getSwitchInlineQuery(): ?string
    {
        return $this->data['switch_inline_query'] ?? null;
    }

    /**
     * Retrieves the inline query to be inserted in the current chat when the button is pressed.
     *
     * @return string|null The inline query for the current chat, or null if not available.
     */
    public function getSwitchInlineQueryCurrentChat(): ?string
    {
        return $this->data['switch_inline_query_current_chat'] ?? null;
    }

    /**
     * Retrieves the inline query to be inserted in a chosen chat when the button is pressed.
     *
     * @return SwitchInlineQueryChosenChat|null The inline query for the chosen chat, or null if not available.
     */
    public function getSwitchInlineQueryChosenChat(): ?SwitchInlineQueryChosenChat
    {
        return isset($this->data['switch_inline_query_chosen_chat']) ? new SwitchInlineQueryChosenChat($this->data['switch_inline_query_chosen_chat']) : null;
    }

    /**
     * Retrieves the description of the game that will be launched when the button is pressed.
     *
     * @return CallbackGame|null The Callback Game, or null if not available.
     */
    public function getCallbackGame(): ?CallbackGame
    {
        return isset($this->data['callback_game']) ? new CallbackGame($this->data['callback_game']) : null;
    }

    /**
     * Checks if the button is a Pay button.
     *
     * @return bool True if it is a Pay button, otherwise false.
     */
    public function isPay(): bool
    {
        return $this->data['pay'] ?? false;
    }
}