<?php

namespace Ispahbod\BotFather\Field;

final class GetForumTopicIconStickersField
{
    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername).
     * @var string|int
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Topic name, 1-128 characters.
     * @var string
     */
    public const NAME = 'name';

    /**
     * Optional. Color of the topic icon in RGB format. Currently, must be one of 7322096 (0x6FB9F0), 16766590 (0xFFD67E),
     * 13338331 (0xCB86DB), 9367192 (0x8EEE98), 16749490 (0xFF93B2), or 16478047 (0xFB6F5F).
     * @var int|null
     */
    public const ICON_COLOR = 'icon_color';

    /**
     * Optional. Unique identifier of the custom emoji shown as the topic icon. Use getForumTopicIconStickers to get all allowed custom emoji identifiers.
     * @var string|null
     */
    public const ICON_CUSTOM_EMOJI_ID = 'icon_custom_emoji_id';
}