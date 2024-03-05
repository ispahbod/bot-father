<?php

namespace Ispahbod\BotFather\Class;

use Ispahbod\BotFather\Constant\ApiMethod;
use Ispahbod\BotFather\Trait\HttpResponseApiMethod;
use Ispahbod\BotFather\Trait\TokenConstructor;
use Ispahbod\BotFather\Type\Message;
use Ispahbod\BotFather\Type\MessageId;
use Ispahbod\BotFather\Type\Messages;

class Sender
{
    use TokenConstructor;
    use HttpResponseApiMethod;

    public function SendMessage(array $data): Message
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_MESSAGE, $data);
        return new Message($response[0], error: $response[1]);
    }

    public function ForwardMessage(array $data): Message
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::FORWARD_MESSAGE, $data);
        return new Message($response[0], error: $response[1]);
    }

    public function ForwardMessages(array $data): MessageId
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::FORWARD_MESSAGES, $data);
        return new MessageId($response[0], error: $response[1]);
    }

    public function CopyMessage(array $data): MessageId
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::COPY_MESSAGE, $data);
        return new MessageId($response[0], error: $response[1]);
    }

    public function CopyMessages(array $data): MessageId
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::COPY_MESSAGES, $data);
        return new MessageId($response[0], error: $response[1]);
    }

    public function SendPhoto(array $data): Message
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_PHOTO, $data);
        return new Message($response[0], error: $response[1]);
    }

    public function SendAudio(array $data): Message
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_AUDIO, $data);
        return new Message($response[0], error: $response[1]);
    }

    public function SendDocument(array $data): Message
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_DOCUMENT, $data);
        return new Message($response[0], error: $response[1]);
    }

    public function SendVideo(array $data): Message
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_VIDEO, $data);
        return new Message($response[0], error: $response[1]);
    }

    public function SendAnimation(array $data): Message
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_ANIMATION, $data);
        return new Message($response[0], error: $response[1]);
    }

    public function SendVoice(array $data): Message
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_VOICE, $data);
        return new Message($response[0], error: $response[1]);
    }

    public function SendMediaGroup(array $data): Messages
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_MEDIA_GROUP, $data);
        return new Messages($response[0], error: $response[1]);
    }

    public function SendLocation(array $data): Message
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_LOCATION, $data);
        return new Message($response[0], error: $response[1]);
    }

    public function SendVenue(array $data): Message
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_VENUE, $data);
        return new Message($response[0], error: $response[1]);
    }

    public function SendContact(array $data): Message
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_CONTACT, $data);
        return new Message($response[0], error: $response[1]);
    }

    public function SendPoll(array $data): Message
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_POLL, $data);
        return new Message($response[0], error: $response[1]);
    }

    public function SendDice(array $data): Message
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_DICE, $data);
        return new Message($response[0], error: $response[1]);
    }

    public function SendChatAction(array $data): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_CHAT_ACTION, $data);
        return empty($response[1]);
    }

    public function SendAction(array $data): ChatAction
    {
        return new ChatAction($this->token, $data);
    }

    public function AnswerCallbackQuery(array $data): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::ANSWER_CALLBACK_QUERY, $data);
        return empty($response[1]);
    }
}
