<?php

namespace Ispahbod\BotFather\Method;

use Ispahbod\BotFather\Constant\ApiMethods;
use Ispahbod\BotFather\Constant\ChatActionType;
use Ispahbod\BotFather\Trait\HttpResponseApiMethod;
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

    public function setWebhook(): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SET_WEBHOOK)['error_code']);
    }

    public function deleteWebhook(): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::DELETE_WEBHOOK)['error_code']);
    }

    public function getWebhookInfo(): WebhookInfo
    {
        return new WebhookInfo($this->httpResponseApiMethod(ApiMethods::GET_WEBHOOK_INFO));
    }

    public function getMe(): User
    {
        return new User($this->httpResponseApiMethod(ApiMethods::GET_ME));
    }

    public function logOut(): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::LOG_OUT)['error_code']);
    }

    public function close(): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::CLOSE)['error_code']);
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

    public function sendChatAction($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, $data)['error_code']);
    }

    public function sendTypingChatAction($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::TYPING, ...$data])['error_code']);
    }

    public function sendUploadVideoChatAction($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::UPLOAD_VIDEO, ...$data])['error_code']);
    }

    public function sendRecordVideoChatAction($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::RECORD_VIDEO, ...$data])['error_code']);
    }

    public function sendRecordVideoNoteChatAction($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::RECORD_VIDEO_NOTE, ...$data])['error_code']);
    }

    public function sendUploadVideoNoteChatAction($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::UPLOAD_VIDEO_NOTE, ...$data])['error_code']);
    }

    public function sendChooseStickerChatAction($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::CHOOSE_STICKER, ...$data])['error_code']);
    }

    public function sendUploadDocumentChatAction($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::UPLOAD_DOCUMENT, ...$data])['error_code']);
    }

    public function sendUploadVoiceChatAction($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::UPLOAD_VOICE, ...$data])['error_code']);
    }

    public function sendUploadPhotoChatAction($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::UPLOAD_PHOTO, ...$data])['error_code']);
    }

    public function sendFindLocationChatAction($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::FIND_LOCATION, ...$data])['error_code']);
    }

    public function sendRecordVoiceChatAction($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SEND_CHAT_ACTION, ['action' => ChatActionType::RECORD_VOICE, ...$data])['error_code']);
    }

    public function setMessageReaction($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SET_MESSAGE_REACTION, $data)['error_code']);
    }

    public function getUserProfilePhotos($data = []): UserProfilePhotos
    {
        return new UserProfilePhotos($this->httpResponseApiMethod(ApiMethods::GET_USER_PROFILE_PHOTOS, $data));
    }

    public function getFile($data = []): File
    {
        return new File($this->httpResponseApiMethod(ApiMethods::GET_FILE, $data));
    }

    public function banChatMember($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::BAN_CHAT_MEMBER, $data)['error_code']);
    }

    public function unbanChatMember($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::UNBAN_CHAT_MEMBER, $data)['error_code']);
    }

    public function restrictChatMember($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::RESTRICT_CHAT_MEMBER, $data)['error_code']);
    }

    public function promoteChatMember($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::PROMOTE_CHAT_MEMBER, $data)['error_code']);
    }

    public function setChatAdministratorCustomTitle($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SET_CHAT_ADMINISTRATOR_CUSTOM_TITLE, $data)['error_code']);
    }

    public function banChatSenderChat($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::BAN_CHAT_SENDER_CHAT, $data)['error_code']);
    }

    public function unbanChatSenderChat($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::UNBAN_CHAT_SENDER_CHAT, $data)['error_code']);
    }

    public function setChatPermissions($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SET_CHAT_PERMISSIONS, $data)['error_code']);
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

    public function approveChatJoinRequest($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::APPROVE_CHAT_JOIN_REQUEST, $data)['error_code']);
    }

    public function declineChatJoinRequest($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::DECLINE_CHAT_JOIN_REQUEST, $data)['error_code']);
    }

    public function setChatPhoto($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SET_CHAT_PHOTO, $data)['error_code']);
    }

    public function deleteChatPhoto($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::DELETE_CHAT_PHOTO, $data)['error_code']);
    }

    public function setChatTitle($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SET_CHAT_TITLE, $data)['error_code']);
    }

    public function setChatDescription($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SET_CHAT_DESCRIPTION, $data)['error_code']);
    }

    public function pinChatMessage($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::PIN_CHAT_MESSAGE, $data)['error_code']);
    }

    public function unpinChatMessage($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::UNPIN_CHAT_MESSAGE, $data)['error_code']);
    }

    public function unpinAllChatMessages($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::UNPIN_ALL_CHAT_MESSAGES, $data)['error_code']);
    }

    public function leaveChat($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::LEAVE_CHAT, $data)['error_code']);
    }

    public function getChat($data = []): ChatFullInfo
    {
        return new ChatFullInfo($this->httpResponseApiMethod(ApiMethods::GET_CHAT, $data));
    }

    public function getChatAdministrators($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::GET_CHAT_ADMINISTRATORS, $data)['error_code']);
    }

    public function getChatMemberCount($data = []): ?int
    {
        return $this->httpResponseApiMethod(ApiMethods::GET_CHAT_MEMBER_COUNT, $data)['content'] ?? null;
    }

    public function getChatMember($data = []): ChatMember
    {
        return new ChatMember($this->httpResponseApiMethod(ApiMethods::GET_CHAT_MEMBER, $data));
    }

    public function setChatStickerSet($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SET_CHAT_STICKER_SET, $data)['error_code']);
    }

    public function deleteChatStickerSet($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::DELETE_CHAT_STICKER_SET, $data)['error_code']);
    }

    public function getForumTopicIconStickers(): ?string
    {
        return $this->httpResponseApiMethod(ApiMethods::GET_FORUM_TOPIC_ICON_STICKERS)['content'] ?? null;
    }

    public function createForumTopic(): ForumTopic
    {
        return new ForumTopic($this->httpResponseApiMethod(ApiMethods::CREATE_FORUM_TOPIC));
    }

    public function editForumTopic($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::EDIT_FORUM_TOPIC, $data)['error_code']);
    }

    public function closeForumTopic($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::CLOSE_FORUM_TOPIC, $data)['error_code']);
    }

    public function reopenForumTopic($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::REOPEN_FORUM_TOPIC, $data)['error_code']);
    }

    public function deleteForumTopic($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::DELETE_FORUM_TOPIC, $data)['error_code']);
    }

    public function unpinAllForumTopicMessages($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::UNPIN_ALL_FORUM_TOPIC_MESSAGES, $data)['error_code']);
    }

    public function editGeneralForumTopic($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::EDIT_GENERAL_FORUM_TOPIC, $data)['error_code']);
    }

    public function closeGeneralForumTopic($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::CLOSE_GENERAL_FORUM_TOPIC, $data)['error_code']);
    }

    public function reopenGeneralForumTopic($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::REOPEN_GENERAL_FORUM_TOPIC, $data)['error_code']);
    }

    public function hideGeneralForumTopic($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::HIDE_GENERAL_FORUM_TOPIC, $data)['error_code']);
    }

    public function unhideGeneralForumTopic($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::UNHIDE_GENERAL_FORUM_TOPIC, $data)['error_code']);
    }

    public function unpinAllGeneralForumTopicMessages($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::UNPIN_ALL_GENERAL_FORUM_TOPIC_MESSAGES, $data)['error_code']);
    }

    public function answerCallbackQuery($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::ANSWER_CALLBACK_QUERY, $data)['error_code']);
    }

    public function getUserChatBoosts($data = []): UserChatBoosts
    {
        return new UserChatBoosts($this->httpResponseApiMethod(ApiMethods::GET_USER_CHAT_BOOSTS, $data));
    }

    public function getBusinessConnection($data = []): BusinessConnection
    {
        return new BusinessConnection($this->httpResponseApiMethod(ApiMethods::GET_BUSINESS_CONNECTION, $data));
    }

    public function setMyCommands($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SET_MY_COMMANDS, $data)['error_code']);
    }

    public function deleteMyCommands($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::DELETE_MY_COMMANDS, $data)['error_code']);
    }

    public function getMyCommands($data = []): BotCommand
    {
        return new BotCommand($this->httpResponseApiMethod(ApiMethods::GET_MY_COMMANDS, $data));
    }

    public function setMyName($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SET_MY_NAME, $data)['error_code']);
    }

    public function getMyName($data = []): BotName
    {
        return new BotName($this->httpResponseApiMethod(ApiMethods::GET_MY_NAME, $data));
    }

    public function setMyDescription($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SET_MY_DESCRIPTION, $data)['error_code']);
    }

    public function getMyDescription($data = []): BotDescription
    {
        return new BotDescription($this->httpResponseApiMethod(ApiMethods::GET_MY_DESCRIPTION, $data));
    }

    public function setMyShortDescription($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SET_MY_SHORT_DESCRIPTION, $data)['error_code']);
    }

    public function getMyShortDescription($data = []): BotShortDescription
    {
        return new BotShortDescription($this->httpResponseApiMethod(ApiMethods::GET_MY_SHORT_DESCRIPTION, $data));
    }


    public function setChatMenuButton($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SET_CHAT_MENU_BUTTON, $data)['error_code']);
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

    public function setMyDefaultAdministratorRights($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::SET_MY_DEFAULT_ADMINISTRATOR_RIGHTS, $data)['error_code']);
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

    public function deleteMessage($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::DELETE_MESSAGE, $data)['error_code']);
    }

    public function deleteMessages($data = []): bool
    {
        return empty($this->httpResponseApiMethod(ApiMethods::DELETE_MESSAGES, $data)['error_code']);
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
