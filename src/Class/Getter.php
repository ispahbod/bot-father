<?php

namespace Ispahbod\BotFather\Class;

use Ispahbod\BotFather\Constant\ApiMethod;
use Ispahbod\BotFather\Http\Http;
use Ispahbod\BotFather\Trait\HttpResponseApiMethod;
use Ispahbod\BotFather\Trait\TokenConstructor;
use Ispahbod\BotFather\Type\BotCommands;
use Ispahbod\BotFather\Type\BotDescription;
use Ispahbod\BotFather\Type\BotName;
use Ispahbod\BotFather\Type\BotShortDescription;
use Ispahbod\BotFather\Type\ChatAdministratorRights;
use Ispahbod\BotFather\Type\File;
use Ispahbod\BotFather\Type\ForumTopics;
use Ispahbod\BotFather\Type\Updates;
use Ispahbod\BotFather\Type\User;
use Ispahbod\BotFather\Type\UserProfilePhotos;

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

    public function GetMyCommands(array $data = []): BotCommands
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::GET_MY_COMMANDS, $data);
        return new BotCommands($response[0], error: $response[1]);
    }

    public function GetMyName(array $data): BotName
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::GET_MY_NAME, $data);
        return new BotName($response[0], error: $response[1]);
    }

    public function GetMyDescription(array $data): BotDescription
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::GET_MY_DESCRIPTION, $data);
        return new BotDescription($response[0], error: $response[1]);
    }

    public function GetMyShortDescription(array $data): BotShortDescription
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::GET_MY_DESCRIPTION, $data);
        return new BotShortDescription($response[0], error: $response[1]);
    }

    public function GetMyDefaultAdministratorRights(array $data): ChatAdministratorRights
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::GET_MY_DEFAULT_ADMINISTRATOR_RIGHTS, $data);
        return new ChatAdministratorRights($response[0], error: $response[1]);
    }
}
