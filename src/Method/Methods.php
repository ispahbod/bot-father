<?php

namespace Ispahbod\BotFather\Method;

use Ispahbod\BotFather\Constant\ApiMethods;
use Ispahbod\BotFather\Constant\ChatActionType;
use Ispahbod\BotFather\Trait\HttpResponseApiMethod;
use Ispahbod\BotFather\Type\ActionResult;
use Ispahbod\BotFather\Type\BotCommand;
use Ispahbod\BotFather\Type\BotDescription;
use Ispahbod\BotFather\Type\BotName;
use Ispahbod\BotFather\Type\BotShortDescription;
use Ispahbod\BotFather\Type\BusinessConnection;
use Ispahbod\BotFather\Type\ChatAdministratorRights;
use Ispahbod\BotFather\Type\ChatFullInfo;
use Ispahbod\BotFather\Type\ChatInviteLink;
use Ispahbod\BotFather\Type\ChatMember;
use Ispahbod\BotFather\Type\File;
use Ispahbod\BotFather\Type\ForumTopic;
use Ispahbod\BotFather\Type\MenuButtonCommands;
use Ispahbod\BotFather\Type\MenuButtonDefault;
use Ispahbod\BotFather\Type\MenuButtonWebApp;
use Ispahbod\BotFather\Type\Message;
use Ispahbod\BotFather\Type\MessageId;
use Ispahbod\BotFather\Type\Poll;
use Ispahbod\BotFather\Type\Updates;
use Ispahbod\BotFather\Type\User;
use Ispahbod\BotFather\Type\UserChatBoosts;
use Ispahbod\BotFather\Type\UserProfilePhotos;
use Ispahbod\BotFather\Type\WebhookInfo;

class Methods
{
    use HttpResponseApiMethod;

    private string $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public function getUpdates(): Updates
    {
        return new Updates($this->httpResponseApiMethod(ApiMethods::GET_UPDATES));
    }

    public function setWebhook($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SET_WEBHOOK,$data));
    }

    public function deleteWebhook(): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::DELETE_WEBHOOK));
    }

    public function getWebhookInfo(): WebhookInfo
    {
        return new WebhookInfo($this->httpResponseApiMethod(ApiMethods::GET_WEBHOOK_INFO));
    }

    public function getMe(): User
    {
        return new User($this->httpResponseApiMethod(ApiMethods::GET_ME));
    }

    public function logOut(): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::LOG_OUT));
    }

    public function close(): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::CLOSE));
    }

    public function sendMessage($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::SEND_MESSAGE, $data));
    }

    public function forwardMessage($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::FORWARD_MESSAGE, $data));
    }

    public function forwardMessages($data = []): array
    {
        return array_map(static function ($message) {
            return new MessageId($message);
        }, $this->httpResponseApiMethod(ApiMethods::FORWARD_MESSAGES, $data));
    }

    public function copyMessage($data = []): MessageId
    {
        return new MessageId($this->httpResponseApiMethod(ApiMethods::COPY_MESSAGE, $data));
    }

    public function copyMessages($data = []): array
    {
        return array_map(static function ($message) {
            return new MessageId($message);
        }, $this->httpResponseApiMethod(ApiMethods::COPY_MESSAGES, $data));
    }

    public function sendPhoto($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::SEND_PHOTO, $data));
    }

    public function sendAudio($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::SEND_AUDIO, $data));
    }

    public function sendDocument($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::SEND_DOCUMENT, $data));
    }

    public function sendVideo($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::SEND_VIDEO, $data));
    }

    public function sendAnimation($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::SEND_ANIMATION, $data));
    }

    public function sendVoice($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::SEND_VOICE, $data));
    }

    public function sendVideoNote($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::SEND_VIDEO_NOTE, $data));
    }

    public function sendMediaGroup($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::SEND_MEDIA_GROUP, $data));
    }

    public function sendLocation($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::SEND_LOCATION, $data));
    }

    public function sendVenue($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::SEND_VENUE, $data));
    }

    public function sendContact($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::SEND_CONTACT, $data));
    }

    public function sendPoll($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::SEND_POLL, $data));
    }

    public function sendDice($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::SEND_DICE, $data));
    }

    public function sendChatAction($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, $data));
    }

    public function sendTypingChatAction($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::TYPING, ...$data]));
    }

    public function sendUploadVideoChatAction($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::UPLOAD_VIDEO, ...$data]));
    }

    public function sendRecordVideoChatAction($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::RECORD_VIDEO, ...$data]));
    }

    public function sendRecordVideoNoteChatAction($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::RECORD_VIDEO_NOTE, ...$data]));
    }

    public function sendUploadVideoNoteChatAction($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::UPLOAD_VIDEO_NOTE, ...$data]));
    }

    public function sendChooseStickerChatAction($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::CHOOSE_STICKER, ...$data]));
    }

    public function sendUploadDocumentChatAction($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::UPLOAD_DOCUMENT, ...$data]));
    }

    public function sendUploadVoiceChatAction($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::UPLOAD_VOICE, ...$data]));
    }

    public function sendUploadPhotoChatAction($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::UPLOAD_PHOTO, ...$data]));
    }

    public function sendFindLocationChatAction($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::FIND_LOCATION, ...$data]));
    }

    public function sendRecordVoiceChatAction($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::RECORD_VOICE, ...$data]));
    }

    public function setMessageReaction($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SET_MESSAGE_REACTION, $data));
    }

    public function getUserProfilePhotos($data = []): UserProfilePhotos
    {
        return new UserProfilePhotos($this->httpResponseApiMethod(ApiMethods::GET_USER_PROFILE_PHOTOS, $data));
    }

    public function getFile($data = []): File
    {
        return new File($this->httpResponseApiMethod(ApiMethods::GET_FILE, $data));
    }

    public function banChatMember($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::BAN_CHAT_MEMBER, $data));
    }

    public function unbanChatMember($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::UNBAN_CHAT_MEMBER, $data));
    }

    public function restrictChatMember($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::RESTRICT_CHAT_MEMBER, $data));
    }

    public function promoteChatMember($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::PROMOTE_CHAT_MEMBER, $data));
    }

    public function setChatAdministratorCustomTitle($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SET_CHAT_ADMINISTRATOR_CUSTOM_TITLE, $data));
    }

    public function banChatSenderChat($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::BAN_CHAT_SENDER_CHAT, $data));
    }

    public function unbanChatSenderChat($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::UNBAN_CHAT_SENDER_CHAT, $data));
    }

    public function setChatPermissions($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SET_CHAT_PERMISSIONS, $data));
    }

    public function exportChatInviteLink($data = []): ?string
    {
        return $this->httpResponseApiMethod(ApiMethods::EXPORT_CHAT_INVITE_LINK, $data)['content'] ?? null;
    }

    public function createChatInviteLink($data = []): ChatInviteLink
    {
        return new ChatInviteLink($this->httpResponseApiMethod(ApiMethods::CREATE_CHAT_INVITE_LINK, $data));
    }

    public function editChatInviteLink($data = []): ChatInviteLink
    {
        return new ChatInviteLink($this->httpResponseApiMethod(ApiMethods::EDIT_CHAT_INVITE_LINK, $data));
    }

    public function revokeChatInviteLink($data = []): ChatInviteLink
    {
        return new ChatInviteLink($this->httpResponseApiMethod(ApiMethods::REVOKE_CHAT_INVITE_LINK, $data));
    }

    public function approveChatJoinRequest($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::APPROVE_CHAT_JOIN_REQUEST, $data));
    }

    public function declineChatJoinRequest($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::DECLINE_CHAT_JOIN_REQUEST, $data));
    }

    public function setChatPhoto($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SET_CHAT_PHOTO, $data));
    }

    public function deleteChatPhoto($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::DELETE_CHAT_PHOTO, $data));
    }

    public function setChatTitle($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SET_CHAT_TITLE, $data));
    }

    public function setChatDescription($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SET_CHAT_DESCRIPTION, $data));
    }

    public function pinChatMessage($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::PIN_CHAT_MESSAGE, $data));
    }

    public function unpinChatMessage($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::UNPIN_CHAT_MESSAGE, $data));
    }

    public function unpinAllChatMessages($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::UNPIN_ALL_CHAT_MESSAGES, $data));
    }

    public function leaveChat($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::LEAVE_CHAT, $data));
    }

    public function getChat($data = []): ChatFullInfo
    {
        return new ChatFullInfo($this->httpResponseApiMethod(ApiMethods::GET_CHAT, $data));
    }

    public function getChatAdministrators($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::GET_CHAT_ADMINISTRATORS, $data));
    }

    public function getChatMemberCount($data = []): ?int
    {
        return $this->httpResponseApiMethod(ApiMethods::GET_CHAT_MEMBER_COUNT, $data)['content'] ?? null;
    }

    public function getChatMember($data = []): ChatMember
    {
        return new ChatMember($this->httpResponseApiMethod(ApiMethods::GET_CHAT_MEMBER, $data));
    }

    public function setChatStickerSet($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SET_CHAT_STICKER_SET, $data));
    }

    public function deleteChatStickerSet($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::DELETE_CHAT_STICKER_SET, $data));
    }

    public function getForumTopicIconStickers(): ?string
    {
        return $this->httpResponseApiMethod(ApiMethods::GET_FORUM_TOPIC_ICON_STICKERS)['content'] ?? null;
    }

    public function createForumTopic(): ForumTopic
    {
        return new ForumTopic($this->httpResponseApiMethod(ApiMethods::CREATE_FORUM_TOPIC));
    }

    public function editForumTopic($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::EDIT_FORUM_TOPIC, $data));
    }

    public function closeForumTopic($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::CLOSE_FORUM_TOPIC, $data));
    }

    public function reopenForumTopic($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::REOPEN_FORUM_TOPIC, $data));
    }

    public function deleteForumTopic($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::DELETE_FORUM_TOPIC, $data));
    }

    public function unpinAllForumTopicMessages($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::UNPIN_ALL_FORUM_TOPIC_MESSAGES, $data));
    }

    public function editGeneralForumTopic($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::EDIT_GENERAL_FORUM_TOPIC, $data));
    }

    public function closeGeneralForumTopic($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::CLOSE_GENERAL_FORUM_TOPIC, $data));
    }

    public function reopenGeneralForumTopic($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::REOPEN_GENERAL_FORUM_TOPIC, $data));
    }

    public function hideGeneralForumTopic($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::HIDE_GENERAL_FORUM_TOPIC, $data));
    }

    public function unhideGeneralForumTopic($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::UNHIDE_GENERAL_FORUM_TOPIC, $data));
    }

    public function unpinAllGeneralForumTopicMessages($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::UNPIN_ALL_GENERAL_FORUM_TOPIC_MESSAGES, $data));
    }

    public function answerCallbackQuery($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::ANSWER_CALLBACK_QUERY, $data));
    }

    public function getUserChatBoosts($data = []): UserChatBoosts
    {
        return new UserChatBoosts($this->httpResponseApiMethod(ApiMethods::GET_USER_CHAT_BOOSTS, $data));
    }

    public function getBusinessConnection($data = []): BusinessConnection
    {
        return new BusinessConnection($this->httpResponseApiMethod(ApiMethods::GET_BUSINESS_CONNECTION, $data));
    }

    public function setMyCommands($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SET_MY_COMMANDS, $data));
    }

    public function deleteMyCommands($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::DELETE_MY_COMMANDS, $data));
    }

    public function getMyCommands($data = []): BotCommand
    {
        return new BotCommand($this->httpResponseApiMethod(ApiMethods::GET_MY_COMMANDS, $data));
    }

    public function setMyName($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SET_MY_NAME, $data));
    }

    public function getMyName($data = []): BotName
    {
        return new BotName($this->httpResponseApiMethod(ApiMethods::GET_MY_NAME, $data));
    }

    public function setMyDescription($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SET_MY_DESCRIPTION, $data));
    }

    public function getMyDescription($data = []): BotDescription
    {
        return new BotDescription($this->httpResponseApiMethod(ApiMethods::GET_MY_DESCRIPTION, $data));
    }

    public function setMyShortDescription($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SET_MY_SHORT_DESCRIPTION, $data));
    }

    public function getMyShortDescription($data = []): BotShortDescription
    {
        return new BotShortDescription($this->httpResponseApiMethod(ApiMethods::GET_MY_SHORT_DESCRIPTION, $data));
    }


    public function setChatMenuButton($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SET_CHAT_MENU_BUTTON, $data));
    }

    public function getChatMenuButton($data = []): MenuButtonCommands|MenuButtonWebApp|MenuButtonDefault
    {
        $data = $this->httpResponseApiMethod(ApiMethods::GET_CHAT_MENU_BUTTON, $data);
        return match ($data['type']) {
            'commands' => new MenuButtonCommands($data = []),
            'web_app' => new MenuButtonWebApp($data = []),
            'default' => new MenuButtonDefault($data = []),
        };
    }

    public function setMyDefaultAdministratorRights($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::SET_MY_DEFAULT_ADMINISTRATOR_RIGHTS, $data));
    }

    public function getMyDefaultAdministratorRights($data = []): ChatAdministratorRights
    {
        return new ChatAdministratorRights($this->httpResponseApiMethod(ApiMethods::GET_MY_DEFAULT_ADMINISTRATOR_RIGHTS, $data));
    }

    public function editMessageText($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::EDIT_MESSAGE_TEXT, $data));
    }

    public function editMessageCaption($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::EDIT_MESSAGE_CAPTION, $data));
    }

    public function editMessageMedia($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::EDIT_MESSAGE_MEDIA, $data));
    }

    public function editMessageLiveLocation($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::EDIT_MESSAGE_LIVE_LOCATION, $data));
    }

    public function stopMessageLiveLocation($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::STOP_MESSAGE_LIVE_LOCATION, $data));
    }

    public function editMessageReplyMarkup($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::EDIT_MESSAGE_REPLY_MARKUP, $data));
    }

    public function stopPoll($data = []): Poll
    {
        return new Poll($this->httpResponseApiMethod(ApiMethods::STOP_POLL, $data));
    }

    public function deleteMessage($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::DELETE_MESSAGE, $data));
    }

    public function deleteMessages($data = []): ActionResult
    {
        return new ActionResult($this->httpResponseApiMethod(ApiMethods::DELETE_MESSAGES, $data));
    }

    public function sendGame($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::SEND_GAME, $data));
    }

    public function setGameScore($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::SET_GAME_SCORE, $data));
    }

    public function getGameHighScores($data = []): Message
    {
        return new Message($this->httpResponseApiMethod(ApiMethods::GET_GAME_HIGH_SCORES, $data));
    }
}
