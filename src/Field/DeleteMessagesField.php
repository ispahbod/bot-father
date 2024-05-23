<?php

namespace Ispahbod\BotFather\Field;

final class DeleteMessagesField
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     * @var string|int
     */
    public const CHAT_ID = 'chat_id';

    /**
     * A JSON-serialized list of 1-100 identifiers of messages to delete.
     * @var array<int>
     */
    public const MESSAGE_IDS = 'message_ids';
}
