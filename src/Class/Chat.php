<?php

namespace LaravelBot\BotFather\Class;

use LaravelBot\BotFather\Constant\ApiMethod;
use LaravelBot\BotFather\Field\GetChatMemberField;
use LaravelBot\BotFather\Http\Async;
use LaravelBot\BotFather\Trait\HttpResponseApiMethod;
use LaravelBot\BotFather\Trait\TokenConstructor;
use LaravelBot\BotFather\Type\ChatInviteLink;
use LaravelBot\BotFather\Type\ChatMember;
use LaravelBot\BotFather\Type\ChatsMember;
use LaravelBot\BotFather\Type\ForumTopic;
use LaravelBot\BotFather\Type\MenuButton;
use LaravelBot\BotFather\Type\Sticker;
use LaravelBot\BotFather\Type\UserChatBoosts;

class Chat
{
    use TokenConstructor;
    use HttpResponseApiMethod;

    private function callMethodBoolDeclaration($method, $data): bool
    {
        $response = $this->HttpResponseApiMethod($method, $data);
        return empty($response[1]);
    }

    public function BanChatMember(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::BAN_CHAT_MEMBER, $data);
    }

    public function UnbanChatMember(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::UNBAN_CHAT_MEMBER, $data);
    }

    public function RestrictChatMember(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::RESTRICT_CHAT_MEMBER, $data);
    }

    public function PromoteChatMember(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::PROMOTE_CHAT_MEMBER, $data);
    }


    public function SetChatMenuButton(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::SET_CHAT_MENU_BUTTON, $data);
    }

    public function IsMembershipToChat(array $data): bool
    {
        return $this->GetChatMember([
            GetChatMemberField::CHAT_ID => $data[GetChatMemberField::CHAT_ID],
            GetChatMemberField::USER_ID => $data[GetChatMemberField::USER_ID],
        ])->IsMembership();
    }

    public function BanChatSenderChat(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::BAN_CHAT_SENDER_CHAT, $data);
    }

    public function UnbanChatSenderChat(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::UNBAN_CHAT_SENDER_CHAT, $data);
    }

    public function SetChatPermissions(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::SET_CHAT_PERMISSIONS, $data);
    }

    public function ApproveChatJoinRequest(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::APPROVE_CHAT_JOIN_REQUEST, $data);
    }

    public function DeclineChatJoinRequest(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::DECLINE_CHAT_JOIN_REQUEST, $data);
    }

    public function SetChatPhoto(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::SET_CHAT_PHOTO, $data);
    }

    public function DeleteChatPhoto(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::DELETE_CHAT_PHOTO, $data);
    }

    public function SetChatTitle(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::SET_CHAT_TITLE, $data);
    }

    public function SetChatDescription(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::SET_CHAT_DESCRIPTION, $data);
    }

    public function PinChatMessage(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::PIN_CHAT_MESSAGE, $data);
    }

    public function UnpinChatMessage(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::UNPIN_CHAT_MESSAGE, $data);
    }

    public function UnpinAllChatMessages(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::UNPIN_ALL_CHAT_MESSAGES, $data);
    }

    public function LeaveChat(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::LEAVE_CHAT, $data);
    }

    public function SetChatStickerSet(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::SET_CHAT_STICKER_SET, $data);
    }

    public function DeleteChatStickerSet(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::DELETE_CHAT_STICKER_SET, $data);
    }

    public function EditForumTopic(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::EDIT_FORUM_TOPIC, $data);
    }

    public function CloseForumTopic(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::CLOSE_FORUM_TOPIC, $data);
    }

    public function ReopenForumTopic(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::REOPEN_FORUM_TOPIC, $data);
    }

    public function DeleteForumTopic(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::DELETE_FORUM_TOPIC, $data);
    }

    public function UnpinAllForumTopicMessages(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::UNPIN_ALL_FORUM_TOPIC_MESSAGES, $data);
    }

    public function EditGeneralForumTopic(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::EDIT_GENERAL_FORUM_TOPIC, $data);
    }

    public function CloseGeneralForumTopic(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::CLOSE_GENERAL_FORUM_TOPIC, $data);
    }

    public function ReopenGeneralForumTopic(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::REOPEN_GENERAL_FORUM_TOPIC, $data);
    }

    public function HideGeneralForumTopic(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::HIDE_GENERAL_FORUM_TOPIC, $data);
    }

    public function UnHideGeneralForumTopic(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::UNHIDE_GENERAL_FORUM_TOPIC, $data);
    }

    public function UnpinAllGeneralForumTopicMessages(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::UNPIN_ALL_GENERAL_FORUM_TOPIC_MESSAGES, $data);
    }

    public function SetChatAdministratorCustomTitle(array $data): bool
    {
        return $this->callMethodBoolDeclaration(ApiMethod::SET_CHAT_ADMINISTRATOR_CUSTOM_TITLE, $data);
    }

    public function GetChatMember(array $data): ChatMember
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::GET_CHAT_MEMBER, $data);
        return new ChatMember($response[0], error: $response[1]);
    }

    public function GetChatsMember(array $data): ChatsMember
    {
        $async = new Async();
        foreach ($data['chat_ids'] as $chat_id) {
            $async->Request($this->token, ApiMethod::GET_CHAT_MEMBER, [
                GetChatMemberField::CHAT_ID => $chat_id,
                GetChatMemberField::USER_ID => $data['user_id'],
            ]);
        }
        return new ChatsMember($async->Send());
    }

    public function GetChat(array $data): \LaravelBot\BotFather\Type\Chat
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::GET_CHAT, $data);
        return new \LaravelBot\BotFather\Type\Chat($response[0], error: $response[1]);
    }

    public function GetChatMenuButton(array $data): MenuButton
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::GET_CHAT_MENU_BUTTON, $data);
        return new MenuButton($response[0], error: $response[1]);
    }

    public function GetChatAdministrators(array $data): ChatMember
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::GET_CHAT_ADMINISTRATORS, $data);
        return new ChatMember($response[0], error: $response[1]);
    }

    public function GetChatMemberCount(array $data): int|false
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::GET_CHAT_MEMBER_COUNT, $data);
        return $response[0] ?? false;
    }

    public function ExportChatInviteLink(array $data): string
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::EXPORT_CHAT_INVITE_LINK, $data);
        return $response[0] ?? '';
    }

    public function CreateChatInviteLink(array $data): ChatInviteLink
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::CREATE_CHAT_INVITE_LINK, $data);
        return new ChatInviteLink($response[0], error: $response[1]);
    }

    public function EditChatInviteLink(array $data): ChatInviteLink
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::EDIT_MESSAGE_TEXT, $data);
        return new ChatInviteLink($response[0], error: $response[1]);
    }

    public function RevokeChatInviteLink(array $data): ChatInviteLink
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::REVOKE_CHAT_INVITE_LINK, $data);
        return new ChatInviteLink($response[0], error: $response[1]);
    }

    public function CreateForumTopic(array $data): ForumTopic
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::CREATE_FORUM_TOPIC, $data);
        return new ForumTopic($response[0], error: $response[1]);
    }

    public function GetForumTopicIconStickers(): Sticker
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::GET_FORUM_TOPIC_ICON_STICKERS);
        return new Sticker($response[0], error: $response[1]);
    }

    public function GetUserChatBoosts(array $data): UserChatBoosts
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::GET_USER_CHAT_BOOSTS, $data);
        return new UserChatBoosts($response[0], error: $response[1]);
    }
}
