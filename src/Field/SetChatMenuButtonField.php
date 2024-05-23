<?php

namespace Ispahbod\BotFather\Field;

use Ispahbod\BotFather\Type\MenuButton;

final class SetChatMenuButtonField
{
    /**
     * Unique identifier for the target private chat.
     * Optional. If not specified, default bot's menu button will be changed.
     * @var int|null
     */
    public const CHAT_ID = 'chat_id';

    /**
     * A JSON-serialized object for the bot's new menu button.
     * Defaults to MenuButtonDefault.
     * @var MenuButton|null
     */
    public const MENU_BUTTON = 'menu_button';
}
