<?php

namespace LaravelBot\BotFather\Constant;

final class UpdateType
{
    public const UPDATE_ID = "update_id";
    public const MESSAGE = "message";
    public const CHANNEL_POST = "channel_post";
    public const EDITED_CHANNEL_POST = "edited_channel_post";
    public const MESSAGE_REACTION = "message_reaction";
    public const MESSAGE_REACTION_COUNT = "message_reaction_count";
    public const INLINE_QUERY = "inline_query";
    public const CHOSEN_INLINE_RESULT = "chosen_inline_result";
    public const CALLBACK_QUERY = "callback_query";
    public const SHIPPING_QUERY = "shipping_query";
    public const PRE_CHECKOUT_QUERY = "pre_checkout_query";
    public const POLL = "poll";
    public const POLL_ANSWER = "poll_answer";
    public const MY_CHAT_MEMBER = "my_chat_member";
    public const CHAT_MEMBER = "chat_member";
    public const CHAT_JOIN_REQUEST = "chat_join_request";
    public const CHAT_BOOST = "chat_boost";
    public const REMOVED_CHAT_BOOST = "removed_chat_boost";
}