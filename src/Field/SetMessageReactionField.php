<?php

namespace Ispahbod\BotFather\Field;

final class SetMessageReactionField
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Identifier of the target message. If the message belongs to a media group, the reaction is set to the first non-deleted message in the group instead.
     * @var int
     */
    public const MESSAGE_ID = 'message_id';

    /**
     * A JSON-serialized list of reaction types to set on the message. Currently, as non-premium users, bots can set up to one reaction per message. A custom emoji reaction can be used if it is either already present on the message or explicitly allowed by chat administrators.
     * @var array|null
     */
    public const REACTION = 'reaction';

    /**
     * Pass True to set the reaction with a big animation.
     * @var bool|null
     */
    public const IS_BIG = 'is_big';
}