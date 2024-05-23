<?php

namespace Ispahbod\BotFather\Field;

class PromoteChatMemberField
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     * @var int|string
     */
    public const CHAT_ID = 'chat_id';

    /**
     * Unique identifier of the target user.
     * @var int
     */
    public const USER_ID = 'user_id';

    /**
     * Pass True if the administrator's presence in the chat is hidden.
     * @var bool|null
     */
    public const IS_ANONYMOUS = 'is_anonymous';

    /**
     * Pass True if the administrator can access the chat event log, and other management features.
     * @var bool|null
     */
    public const CAN_MANAGE_CHAT = 'can_manage_chat';

    /**
     * Pass True if the administrator can delete messages of other users.
     * @var bool|null
     */
    public const CAN_DELETE_MESSAGES = 'can_delete_messages';

    /**
     * Pass True if the administrator can manage video chats.
     * @var bool|null
     */
    public const CAN_MANAGE_VIDEO_CHATS = 'can_manage_video_chats';

    /**
     * Pass True if the administrator can restrict, ban or unban chat members.
     * @var bool|null
     */
    public const CAN_RESTRICT_MEMBERS = 'can_restrict_members';

    /**
     * Pass True if the administrator can promote or demote other administrators.
     * @var bool|null
     */
    public const CAN_PROMOTE_MEMBERS = 'can_promote_members';

    /**
     * Pass True if the administrator can change chat info.
     * @var bool|null
     */
    public const CAN_CHANGE_INFO = 'can_change_info';

    /**
     * Pass True if the administrator can invite new users to the chat.
     * @var bool|null
     */
    public const CAN_INVITE_USERS = 'can_invite_users';

    /**
     * Pass True if the administrator can post stories.
     * @var bool|null
     */
    public const CAN_POST_STORIES = 'can_post_stories';

    /**
     * Pass True if the administrator can edit stories.
     * @var bool|null
     */
    public const CAN_EDIT_STORIES = 'can_edit_stories';

    /**
     * Pass True if the administrator can delete stories.
     * @var bool|null
     */
    public const CAN_DELETE_STORIES = 'can_delete_stories';

    /**
     * Pass True if the administrator can post messages in channels.
     * @var bool|null
     */
    public const CAN_POST_MESSAGES = 'can_post_messages';

    /**
     * Pass True if the administrator can edit messages in channels.
     * @var bool|null
     */
    public const CAN_EDIT_MESSAGES = 'can_edit_messages';

    /**
     * Pass True if the administrator can pin messages in supergroups.
     * @var bool|null
     */
    public const CAN_PIN_MESSAGES = 'can_pin_messages';

    /**
     * Pass True if the user can manage topics in supergroups.
     * @var bool|null
     */
    public const CAN_MANAGE_TOPICS = 'can_manage_topics';
}