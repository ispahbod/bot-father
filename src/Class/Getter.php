<?php

namespace LaravelBot\BotFather\Class;

use LaravelBot\BotFather\Constant\ApiMethod;
use LaravelBot\BotFather\Http\Http;
use LaravelBot\BotFather\Trait\HttpResponseApiMethod;
use LaravelBot\BotFather\Trait\TokenConstructor;
use LaravelBot\BotFather\Type\BotCommands;
use LaravelBot\BotFather\Type\BotDescription;
use LaravelBot\BotFather\Type\BotName;
use LaravelBot\BotFather\Type\BotShortDescription;
use LaravelBot\BotFather\Type\ChatAdministratorRights;
use LaravelBot\BotFather\Type\File;
use LaravelBot\BotFather\Type\ForumTopics;
use LaravelBot\BotFather\Type\Updates;
use LaravelBot\BotFather\Type\User;
use LaravelBot\BotFather\Type\UserProfilePhotos;

class Getter
{
    use TokenConstructor;
    use HttpResponseApiMethod;

    public function GetMe(): User
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::GET_ME);
        return new User($response[0], error: $response[1]);
    }

    public function GetUpdates(): Updates
    {
        return new Updates($this->token);
    }

    public function GetUserProfilePhotos(array $data): UserProfilePhotos
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::GET_USER_PROFILE_PHOTOS, $data);
        return new UserProfilePhotos($response[0], error: $response[1]);
    }

    public function GetFile(array $data): File
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::GET_FILE, $data);
        return new File($response[0], error: $response[1]);
    }

    public function GetForumTopicIconStickers(): ForumTopics
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::GET_FORUM_TOPIC_ICON_STICKERS);
        return new ForumTopics($response[0], error: $response[1]);
    }

    public function GetMyCommands(array $data): BotCommands
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::GET_MY_COMMANDS, $data);
        return new BotCommands($response[0], error: $response[1]);
    }

    public function GetMyName(array $data):BotName
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::GET_MY_NAME, $data);
        return new BotName($response[0], error: $response[1]);
    }

    public function GetMyDescription(array $data):BotDescription
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::GET_MY_DESCRIPTION, $data);
        return new BotDescription($response[0], error: $response[1]);
    }

    public function GetMyShortDescription(array $data):BotShortDescription
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::GET_MY_DESCRIPTION, $data);
        return new BotShortDescription($response[0], error: $response[1]);
    }

    public function GetMyDefaultAdministratorRights(array $data):ChatAdministratorRights
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::GET_MY_DEFAULT_ADMINISTRATOR_RIGHTS, $data);
        return new ChatAdministratorRights($response[0], error: $response[1]);
    }
}
