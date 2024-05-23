<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class MenuButtonWebApp
{
    use DataConstructor;

    /**
     * Retrieves the type of the menu button.
     * This type is always 'web_app'.
     *
     * @return string The type of the menu button.
     */
    public function getType(): string
    {
        return $this->data['type'] ?? 'web_app';
    }

    /**
     * Retrieves the text on the button.
     *
     * @return string The text on the button.
     */
    public function getText(): string
    {
        return $this->data['text'];
    }

    /**
     * Retrieves the description of the Web App that will be launched when the user presses the button.
     * The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery.
     *
     * @return WebAppInfo The Web App Info.
     */
    public function getWebAppInfo(): WebAppInfo
    {
        return new WebAppInfo($this->data['web_app']);
    }

}