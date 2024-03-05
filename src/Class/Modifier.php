<?php

namespace Ispahbod\BotFather\Class;

use Ispahbod\BotFather\Constant\ApiMethod;
use Ispahbod\BotFather\Trait\HttpResponseApiMethod;
use Ispahbod\BotFather\Trait\TokenConstructor;
use Ispahbod\BotFather\Type\Message;
use Ispahbod\BotFather\Type\Poll;

class Modifier
{
    use TokenConstructor;
    use HttpResponseApiMethod;

    public function EditMessageText(array $data): Message
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::EDIT_MESSAGE_TEXT, $data);
        return new Message($response[0], error: $response[1]);
    }

    public function EditMessageCaption(array $data): Message
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::EDIT_MESSAGE_CAPTION, $data);
        return new Message($response[0], error: $response[1]);
    }

    public function EditMessageMedia(array $data): Message
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::EDIT_MESSAGE_MEDIA, $data);
        return new Message($response[0], error: $response[1]);
    }

    public function EditMessageLiveLocation(array $data): Message
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::EDIT_MESSAGE_LIVE_LOCATION, $data);
        return new Message($response[0], error: $response[1]);
    }

    public function StopMessageLiveLocation(array $data): Message
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::STOP_MESSAGE_LIVE_LOCATION, $data);
        return new Message($response[0], error: $response[1]);
    }

    public function EditMessageReplyMarkup(array $data): Message
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::EDIT_MESSAGE_REPLY_MARKUP, $data);
        return new Message($response[0], error: $response[1]);
    }

    public function StopPoll(array $data): Poll
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::STOP_POLL, $data);
        return new Poll($response[0], error: $response[1]);
    }

    public function DeleteMessage(array $data): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::DELETE_MESSAGE, $data);
        return empty($response[1]);
    }

    public function DeleteMessages(array $data): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::DELETE_MESSAGES, $data);
        return empty($response[1]);
    }

    public function EditGeneralForumTopic(array $data): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::EDIT_GENERAL_FORUM_TOPIC, $data);
        return empty($response[1]);
    }

    public function DeleteMyCommands(array $data): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::DELETE_MY_COMMANDS, $data);
        return empty($response[1]);
    }
}
