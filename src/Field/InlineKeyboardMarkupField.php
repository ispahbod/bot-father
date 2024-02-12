<?php

namespace LaravelBot\BotFather\Field;


final class InlineKeyboardMarkupField
{
    public const TEXT = 'text';
    public const URL = 'url';
    public const CALLBACK_DATA = 'callback_data';
    public const WEB_APP = 'web_app';
    public const LOGIN_URL = 'login_url';
    public const SWITCH_INLINE_QUERY = 'switch_inline_query';
    public const SWITCH_INLINE_QUERY_CURRENT_CHAT = 'switch_inline_query_current_chat';
    public const SWITCH_INLINE_QUERY_CHOSEN_CHAT = 'switch_inline_query_chosen_chat';
    public const CALLBACK_GAME = 'callback_game';
    public const PAY = 'pay';
}
