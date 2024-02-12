<?php

namespace Ispahbod\BotFather\Class;

use Ispahbod\BotFather\Constant\ApiMethod;
use Ispahbod\BotFather\Constant\ChatActionType;
use Ispahbod\BotFather\Field\SendChatActionField;
use Ispahbod\BotFather\Trait\HttpResponseApiMethod;

class ChatAction
{
    use HttpResponseApiMethod;

    private string $token;
    private array $data;

    public function __construct(string $token, array $data)
    {
        $this->token = $token;
        $this->data = $data;
    }

    public function Typing(): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_CHAT_ACTION, array_merge($this->data, [SendChatActionField::ACTION => ChatActionType::TYPING]));
        return empty($response[1]);
    }

    public function UploadVideo(): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_CHAT_ACTION, array_merge($this->data, [SendChatActionField::ACTION => ChatActionType::UPLOAD_VIDEO]));
        return empty($response[1]);
    }

    public function RecordVideo(): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_CHAT_ACTION, array_merge($this->data, [SendChatActionField::ACTION => ChatActionType::RECORD_VIDEO]));
        return empty($response[1]);
    }

    public function RecordVideoNote(): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_CHAT_ACTION, array_merge($this->data, [SendChatActionField::ACTION => ChatActionType::RECORD_VIDEO_NOTE]));
        return empty($response[1]);
    }

    public function UploadVideoNote(): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_CHAT_ACTION, array_merge($this->data, [SendChatActionField::ACTION => ChatActionType::RECORD_VIDEO_NOTE]));
        return empty($response[1]);
    }

    public function ChooseSticker(): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_CHAT_ACTION, array_merge($this->data, [SendChatActionField::ACTION => ChatActionType::CHOOSE_STICKER]));
        return empty($response[1]);
    }

    public function UploadDocument(): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_CHAT_ACTION, array_merge($this->data, [SendChatActionField::ACTION => ChatActionType::UPLOAD_DOCUMENT]));
        return empty($response[1]);
    }

    public function UploadVoice(): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_CHAT_ACTION, array_merge($this->data, [SendChatActionField::ACTION => ChatActionType::UPLOAD_VOICE]));
        return empty($response[1]);
    }

    public function UploadPhoto(): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_CHAT_ACTION, array_merge($this->data, [SendChatActionField::ACTION => ChatActionType::UPLOAD_PHOTO]));
        return empty($response[1]);
    }

    public function FindLocation(): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_CHAT_ACTION, array_merge($this->data, [SendChatActionField::ACTION => ChatActionType::FIND_LOCATION]));
        return empty($response[1]);
    }

    public function RecordVoice(): bool
    {
        $response = $this->HttpResponseApiMethod(ApiMethod::SEND_CHAT_ACTION, array_merge($this->data, [SendChatActionField::ACTION => ChatActionType::RECORD_VOICE]));
        return empty($response[1]);
    }
}
