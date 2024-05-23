<?php

namespace Ispahbod\BotFather\Field;

use Ispahbod\BotFather\Type\ChatPermissions;

class SetChatPermissionsField
{
    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * A JSON-serialized object for new default chat permissions.
     * @var ChatPermissions
     */
    public const PERMISSIONS = 'permissions';

    /**
     * Pass True if chat permissions are set independently. Otherwise, the can_send_other_messages and can_add_web_page_previews permissions will imply the can_send_messages, can_send_audios, can_send_documents, can_send_photos, can_send_videos, can_send_video_notes, and can_send_voice_notes permissions; the can_send_polls permission will imply the can_send_messages permission.
     * @var bool|null
     */
    public const USE_INDEPENDENT_CHAT_PERMISSIONS = 'use_independent_chat_permissions';
}