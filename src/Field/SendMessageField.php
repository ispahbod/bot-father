<?php

namespace Ispahbod\BotFather\Field;

use Ispahbod\BotFather\Type\MessageEntity;

final class SendMessageField
{
    public const TEXT = 'text';
    public const CHAT_ID = 'chat_id';
    public const ENTITIES = 'entities';
    public const PARSE_MODE = 'parse_mode';
    public const REPLY_MARKUP = 'reply_markup';
    public const PROTECT_CONTENT = 'protect_content';
    public const REPLY_PARAMETERS = 'reply_parameters';
    public const MESSAGE_THREAD_ID = 'message_thread_id';
    public const DISABLE_NOTIFICATION = 'disable_notification';
    public const LINK_PREVIEW_OPTIONS = 'link_preview_options';
}
