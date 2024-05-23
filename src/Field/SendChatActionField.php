<?php

namespace Ispahbod\BotFather\Field;

final class SendChatActionField
{
    /**
     * Optional. Unique identifier of the business connection on behalf of which the action will be sent.
     * @var string|null
     */
    public const BUSINESS_CONNECTION_ID = 'business_connection_id';

    /**
     * Required. Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Optional. Unique identifier for the target message thread; for supergroups only.
     * @var int|null
     */
    public const MESSAGE_THREAD_ID = 'message_thread_id';

    /**
     * Required. Type of action to broadcast. Choose one, depending on what the user is about to receive:
     * typing, upload_photo, record_video, upload_video, record_voice, upload_voice, upload_document,
     * choose_sticker, find_location, record_video_note, upload_video_note.
     * @var string
     */
    public const ACTION = 'action';
}
