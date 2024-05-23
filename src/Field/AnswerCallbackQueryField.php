<?php

namespace Ispahbod\BotFather\Field;

class AnswerCallbackQueryField
{
    /**
     * Unique identifier for the query to be answered.
     * @var string
     */
    public const CALLBACK_QUERY_ID = 'callback_query_id';

    /**
     * Text of the notification. If not specified, nothing will be shown to the user, 0-200 characters.
     * @var string|null
     */
    public const TEXT = 'text';

    /**
     * If True, an alert will be shown by the client instead of a notification at the top of the chat screen. Defaults to false.
     * @var bool|null
     */
    public const SHOW_ALERT = 'show_alert';

    /**
     * URL that will be opened by the user's client. If you have created a Game and accepted the conditions via @BotFather, specify the URL that opens your game.
     * Otherwise, you may use links like t.me/your_bot?start=XXXX that open your bot with a parameter.
     * @var string|null
     */
    public const URL = 'url';

    /**
     * The maximum amount of time in seconds that the result of the callback query may be cached client-side. Telegram apps will support caching starting in version 3.14. Defaults to 0.
     * @var int|null
     */
    public const CACHE_TIME = 'cache_time';
}
