<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class BackgroundTypeChatTheme
{
    use DataConstructor;

    /**
     * Retrieves the type of the background.
     * Type of the background, always "chat_theme".
     *
     * @return string The type of the background.
     */
    public function getType(): string
    {
        return $this->data['type'];
    }

    /**
     * Retrieves the name of the chat theme.
     * Name of the chat theme, which is usually an emoji.
     *
     * @return string The name of the chat theme.
     */
    public function getThemeName(): string
    {
        return $this->data['theme_name'];
    }
}